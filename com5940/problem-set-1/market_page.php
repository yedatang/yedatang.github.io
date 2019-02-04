<?php /* Template Name: market */ ?>

<?php get_header(); ?>

<body>

  <section id="slides">
    <ul class="slides-container">
      <li>
        <img src="<?php bloginfo('template_url'); ?>/img/slide-7.jpg" alt="">
      </li>
      <li>
        <img src="<?php bloginfo('template_url'); ?>/img/slide-8.jpg" alt="">
      </li>
      <li>
        <img src="<?php bloginfo('template_url'); ?>/img/slide-9.jpg" alt="">
      </li>
    </ul>
    <div id="bannertext">
    <br>
    <h3>創意小物，生活美學</h3>
    <h1>文 創 市 集</h1>
    </div>
    <!-- end:Banner text -->
    <nav class="slides-navigation">
      <a href="index2.html#" class="next">
            <i class="fa fa-angle-right"></i>
            </a>
      <a href="index2.html#" class="prev">
            <i class="fa fa-angle-left"></i>
            </a>
    </nav>
  </section>



<div class="row mt2 aligncenter">
<div class="col-lg-3 col-md-3">
<a href="javascript:showdiv1();"  id="strHref1"   class="btn-slide">
  <div class="spinner"></div>
  <div class="img"><img src="<?php bloginfo('template_url'); ?>/img/market/1.jpg" alt="img"></div>
  <h3 class="centered" style="color: #A79A74;">文具</h3>
</a>
</div>

<div class="col-lg-3 col-md-3">
<a href="javascript:showdiv2();"  id="strHref2"   class="btn-slide">
  <div class="spinner"></div>
  <div class="img"><img src="<?php bloginfo('template_url'); ?>/img/market/2.jpg" alt="img"></div>
  <h3 class="centered" style="color: #A79A74;">簽名本</h3>
</a>
</div>


<div class="col-lg-3 col-md-3">
<a href="javascript:showdiv3();"  id="strHref3"   class="btn-slide">
  <div class="spinner"></div>
  <div class="img"><img src="<?php bloginfo('template_url'); ?>/img/market/3.jpg" alt="img"></div>
  <h3 class="centered" style="color: #A79A74;">配飾包袋</h3>
</a>
</div>

<div class="col-lg-3 col-md-3">
<a href="javascript:showdiv4();"  id="strHref4"   class="btn-slide">
  <div class="spinner"></div>
  <div class="img"><img src="<?php bloginfo('template_url'); ?>/img/market/4.jpg" alt="img"></div>
  <h3 class="centered" style="color: #A79A74;">家居</h3>
</a>
</div>
         <!-- end normal -->
</div>
</div>

<br>

<div class="row centered">
 <div id="show1" style="display:none;">
   <br>
<iframe class="airtable-embed" src="https://airtable.com/embed/shr2YrjR0jNr7sdo8?backgroundColor=orange" frameborder="0" onmousewheel="" width="100%" height="733" style="background: transparent; border: 1px solid #ccc;"></iframe>
 </div>
 </div>

 <div class="row centered">
  <div id="show2" style="display:none;">
    <br>
<iframe class="airtable-embed" src="https://airtable.com/embed/shrk0AatG3H5tafCq?backgroundColor=orange" frameborder="0" onmousewheel="" width="100%" height="733" style="background: transparent; border: 1px solid #ccc;"></iframe>
  </div>
  </div>

  <div class="row centered">
   <div id="show3" style="display:none;">
     <br>
<iframe class="airtable-embed" src="https://airtable.com/embed/shrFesuo02n7VYrV5?backgroundColor=orange" frameborder="0" onmousewheel="" width="100%" height="733" style="background: transparent; border: 1px solid #ccc;"></iframe>
   </div>
   </div>

   <div class="row centered">
    <div id="show4" style="display:none;">
      <br>
<iframe class="airtable-embed" src="https://airtable.com/embed/shrPdPmncuZ4TWhMm?backgroundColor=orange" frameborder="0" onmousewheel="" width="100%" height="733" style="background: transparent; border: 1px solid #ccc;"></iframe>
    </div>
    </div>


</div>
<br>


<script>
function showdiv1()  {
document.getElementById('show1').style.display = "block";

document.getElementById('strHref1').innerHTML="<img src='<?php bloginfo('template_url'); ?>/img/market/1.jpg'  style='opacity: 0.4;'/>  <h3 class='centered'>收起</h3>";
document.getElementById('strHref1').href="javascript:hidediv1();";
}
function hidediv1() {
document.getElementById('show1').style.display='none';
document.getElementById('strHref1').innerHTML="<img src='<?php bloginfo('template_url'); ?>/img/market/1.jpg'>  <h3 class='centered' style='color: #A79A74;'>文具</h3>";
document.getElementById('strHref1').href="javascript:showdiv1();";
}

</script>

<script>
function showdiv2()  {
document.getElementById('show2').style.display = "block";

document.getElementById('strHref2').innerHTML="<img src='<?php bloginfo('template_url'); ?>/img/market/2.jpg'  style='opacity: 0.4;'/>  <h3 class='centered'>收起</h3>";
document.getElementById('strHref2').href="javascript:hidediv2();";
}
function hidediv2() {
document.getElementById('show2').style.display='none';
document.getElementById('strHref2').innerHTML="<img src='<?php bloginfo('template_url'); ?>/img/market/2.jpg'>  <h3 class='centered' style='color: #A79A74;'>簽名本</h3>";
document.getElementById('strHref2').href="javascript:showdiv2();";
}

</script>

<script>
function showdiv3()  {
document.getElementById('show3').style.display = "block";

document.getElementById('strHref3').innerHTML="<img src='<?php bloginfo('template_url'); ?>/img/market/3.jpg'  style='opacity: 0.4;'/>  <h3 class='centered'>收起</h3>";
document.getElementById('strHref3').href="javascript:hidediv3();";
}
function hidediv3() {
document.getElementById('show3').style.display='none';
document.getElementById('strHref3').innerHTML="<img src='<?php bloginfo('template_url'); ?>/img/market/3.jpg'>  <h3 class='centered' style='color: #A79A74;'>配飾包袋</h3>";
document.getElementById('strHref3').href="javascript:showdiv3();";
}

</script>

<script>
function showdiv4()  {
document.getElementById('show4').style.display = "block";

document.getElementById('strHref4').innerHTML="<img src='<?php bloginfo('template_url'); ?>/img/market/4.jpg'  style='opacity: 0.4;'/>  <h3 class='centered'>收起</h3>";
document.getElementById('strHref4').href="javascript:hidediv4();";
}
function hidediv4() {
document.getElementById('show4').style.display='none';
document.getElementById('strHref4').innerHTML="<img src='<?php bloginfo('template_url'); ?>/img/market/4.jpg'>  <h3 class='centered' style='color: #A79A74;'>家居</h3>";
document.getElementById('strHref4').href="javascript:showdiv4();";
}

</script>

<br><br>

<?php get_footer(); ?>
