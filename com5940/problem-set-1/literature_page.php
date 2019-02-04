<?php /* Template Name: literature */ ?>

<?php get_header(); ?>

<body>
  <div class="container">
<div class="row mt3 presentation centered">
  <i class="<?php bloginfo('template_url'); ?>/icon ion-ios7-bookmarks-outline large-icon"></i>
  <h1 class="centered" style="font-family:PMingLiU;font-size:42px; ">文    藝    休    閒</h1>
  <p class="centered" style="padding-left:40px;padding-right:40px;">文化氛圍濃厚，適合閱讀人文藝術作品、參觀拍照</p>
  <hr>

<div style="font-size:17px;font-family:PMingLiU;line-height:38px;color:#8B814C;" >
   <?php
$query = new AirpressQuery();
$query->setConfig("Default");
$query->table("BookstoresFull");
$events = new AirpressCollection($query);
foreach($events as $e){
echo
"<center>書店：".$e["bookstore"]."<br>
地址：".$e["address"]."<br>
特色：".$e["special"]."<br><br>
<center><img src='".$e["img_url"]."' height='400' width='400'></img><hr>";
}
	?>
</div>
</div>
</div>

<?php get_footer(); ?>
