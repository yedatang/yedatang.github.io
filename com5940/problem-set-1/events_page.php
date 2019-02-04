<?php /* Template Name: events */ ?>
<?php get_header(); ?>
<body>
  <section id="slides">
    <ul class="slides-container">
      <li>
        <img src="<?php bloginfo('template_url'); ?>/img/slide-1.jpg" alt="">
      </li>
      <li>
        <img src="<?php bloginfo('template_url'); ?>/img/slide-2.jpg" alt="">
      </li>
      <li>
        <img src="<?php bloginfo('template_url'); ?>/img/slide-3.jpg" alt="">
      </li>
    </ul>
    <div id="bannertext">
    <br>
    <h3>閱讀，并體驗更多</h3>
    <h1>書 店 活 動</h1>
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
  <div class="img"><img src="<?php bloginfo('template_url'); ?>/img/event/1.jpg" alt="img"></div>
  <h3 class="centered" style="color: #A79A74;">文化</h3>
</a>
</div>

<div class="col-lg-3 col-md-3">
<a href="javascript:showdiv2();"  id="strHref2"   class="btn-slide">
  <div class="spinner"></div>
  <div class="img"><img src="<?php bloginfo('template_url'); ?>/img/event/2.jpg" alt="img"></div>
  <h3 class="centered" style="color: #A79A74;">音樂</h3>
</a>
</div>


<div class="col-lg-3 col-md-3">
<a href="javascript:showdiv3();"  id="strHref3"   class="btn-slide">
  <div class="spinner"></div>
  <div class="img"><img src="<?php bloginfo('template_url'); ?>/img/event/3.jpg" alt="img"></div>
  <h3 class="centered" style="color: #A79A74;">影視</h3>
</a>
</div>

<div class="col-lg-3 col-md-3">
<a href="javascript:showdiv4();"  id="strHref4"   class="btn-slide">
  <div class="spinner"></div>
  <div class="img"><img src="<?php bloginfo('template_url'); ?>/img/event/4.jpg" alt="img"></div>
  <h3 class="centered" style="color: #A79A74;">藝術</h3>
</a>
</div>
         <!-- end normal -->
</div>
</div>


<div class="row centered">
 <div id="show1" style="display:none;">
   <br>
<iframe class="airtable-embed" src="https://airtable.com/embed/shrY3JSGMckdHf6jJ?backgroundColor=orange" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>
 </div>
 </div>

 <div class="row centered">
  <div id="show2" style="display:none;">
    <br>
<iframe class="airtable-embed" src="https://airtable.com/embed/shrKJhauGpW3JRTUp?backgroundColor=orange" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe
  </div>
  </div>

  <div class="row centered">
   <div id="show3" style="display:none;">
     <br>
<iframe class="airtable-embed" src="https://airtable.com/embed/shrhJGw9AkiKDIcjs?backgroundColor=orange" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>
   </div>
   </div>

   <div class="row centered">
    <div id="show4" style="display:none;">
      <br>
<iframe class="airtable-embed" src="https://airtable.com/embed/shrW7cTva2pOBsUPA?backgroundColor=orange" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>
    </div>
    </div>

</div>


<script>
function showdiv1()  {
document.getElementById('show1').style.display = "block";

document.getElementById('strHref1').innerHTML="<img src='<?php bloginfo('template_url'); ?>/img/event/1.jpg'  style='opacity: 0.4;'/>  <h3 class='centered'>收起</h3>";
document.getElementById('strHref1').href="javascript:hidediv1();";
}
function hidediv1() {
document.getElementById('show1').style.display='none';
document.getElementById('strHref1').innerHTML="<img src='<?php bloginfo('template_url'); ?>/img/event/1.jpg'>  <h3 class='centered' style='color: #A79A74;'>文化</h3>";
document.getElementById('strHref1').href="javascript:showdiv1();";
}

</script>

<script>
function showdiv2()  {
document.getElementById('show2').style.display = "block";

document.getElementById('strHref2').innerHTML="<img src='<?php bloginfo('template_url'); ?>/img/event/2.jpg'  style='opacity: 0.4;'/>  <h3 class='centered'>收起</h3>";
document.getElementById('strHref2').href="javascript:hidediv2();";
}
function hidediv2() {
document.getElementById('show2').style.display='none';
document.getElementById('strHref2').innerHTML="<img src='<?php bloginfo('template_url'); ?>/img/event/2.jpg'>  <h3 class='centered' style='color: #A79A74;'>音樂</h3>";
document.getElementById('strHref2').href="javascript:showdiv2();";
}

</script>
