<?php include "../includes/header.php";?>
<div id="portfoliofocus">
<?php if (!empty($_GET["p"])) {
$focus = $_GET["p"];
$myfile="items/$focus.txt";
$lines=file($myfile);
$count=count($lines);
?>
	<img src="<?php echo $rootpath;?>work/items/images/<?php echo $focus;?>.jpg" id="itemsfocus" class="fade">
<div id="portfolioinfo">
<?php 
echo "\n<h1>" . trim($lines[1]) . "</h1>";?>
<p class="tinytext"><?php echo date_format(date_create_from_format('Y-m-d', $focus), 'jS F, Y');?></p>
<?php
for ($i = 2; $i <= $count; $i++) {
	echo "\n<p>";
	echo trim($lines[$i]);
	echo "</p>";
	}
?>
</div>
<?
}
else {
	foreach(array_reverse(glob("items/*.txt")) as $file){
		$file=str_replace("items/", "", "$file");
		$file=str_replace(".txt", "", "$file");
		$image="items/images/$file.jpg";
		$myfile="items/$file.txt";
		$lines=file($myfile);
		?>
		<div class="portfolioitem">
			<a class="nohover" href="<?php echo $rootpath;?>work/?p=<?php echo $file;?>">
				<div class="portfoliowrapper">
					<img class="fade" src="<?php echo $image;?>" alt="<?php echo "Image $file";?>">
				</div>
				<span class="fade"><?php echo trim($lines[1]);?></span>
			</a>
		</div>
<?php }
}
include "../includes/footer.php"; ?>