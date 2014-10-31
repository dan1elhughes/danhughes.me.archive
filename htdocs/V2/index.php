<?php include "./includes/header.php";?>
<div id="portfolio">
<?php foreach(array_reverse(glob("work/items/*.txt")) as $file){
	$file=str_replace("work/items/", "", "$file");
	$file=str_replace(".txt", "", "$file");
	$image="work/items/images/$file.jpg";
	$myfile="work/items/$file.txt";
	$lines=file($myfile);?>
<div class="portfolioitem">
	<a class="nohover" href="<?php echo $rootpath;?>work/?p=<?php echo $file;?>">
		<div class="portfoliowrapper">
			<img class="fade" src="<?php echo $image;?>" alt="<?php echo "Image $file";?>">
		</div>
		<span class="fade"><?php echo trim($lines[0]);?></span>
	</a>
</div>
<?php }
include "./includes/footer.php"; ?>