<?php
$id = $_GET['id'];
$read_more = new UserEndController();
$post_info = $read_more->select_post_info();
foreach ($post_info as $key => $value) {
	$title = $value['title'];
	$content = $value['content'];
	$seo_title = $value['seo_title'];
	$meta_title = $value['meta_title'];
	$meta_keyword = $value['meta_keyword'];
}
$image = $select_page->select_image_post();

?>
<div class="col-md-12">
	<h1 align="center"><b><?php echo $title ?></b></h1>

	<div class="description">
		<p align="center"><?php echo $content ?></p>
	</div>
	<h2 align="center"><?php echo$seo_title?></h2>
	<h2 align="center"><?php echo$meta_title?></h2>
	<h2 align="center"><?php echo$meta_keyword?></h2>
</div>

<?php if(count($image)>0) {?>
	<?php foreach ($image as $key => $value) {?>
		<div class="col-md-4" style="padding:30px;">
			<a href="<?php echo $server_root ?>admin/static/images/pageImage/<?php echo $value['image'] ?>" data-lightbox="gallery"><img src="<?php echo $server_root ?>admin/static/images/cropImage/<?php echo $value['crop'] ?>" width="300" height="250" style="padding: 10px;"><br></a>
		</div>
	<?php } ?>
<?php }else{ ?>
	    <div class="alert alert-success">
        	<h1 align="center">Image not found</h1>
        </div>
     <?php } ?>