@extends('app')
@include('partials.header')
@section('template_title')
  Login
@endsection

@section('content')
   <script type="text/javascript">
        jQuery(document).ready(function ($) {
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 10,
                $SpacingX: 8,
                $SpacingY: 8,
                $Align: 360
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 800);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <style>
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        .jssora05l.jssora05lds      (disabled)
        .jssora05r.jssora05rds      (disabled)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('img/a17.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }
        .jssora05l.jssora05lds { background-position: -10px -40px; opacity: .3; pointer-events: none; }
        .jssora05r.jssora05rds { background-position: -70px -40px; opacity: .3; pointer-events: none; }
        /* jssor slider thumbnail navigator skin 01 css *//*.jssort01 .p            (normal).jssort01 .p:hover      (normal mouseover).jssort01 .p.pav        (active).jssort01 .p.pdn        (mousedown)*/.jssort01 .p {    position: absolute;    top: 0;    left: 0;    width: 72px;    height: 72px;}.jssort01 .t {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort01 .w {    position: absolute;    top: 0px;    left: 0px;    width: 100%;    height: 100%;}.jssort01 .c {    position: absolute;    top: 0px;    left: 0px;    width: 68px;    height: 68px;    border: #000 2px solid;    box-sizing: content-box;    background: url('img/t01.png') -800px -800px no-repeat;    _background: none;}.jssort01 .pav .c {    top: 2px;    _top: 0px;    left: 2px;    _left: 0px;    width: 68px;    height: 68px;    border: #000 0px solid;    _border: #fff 2px solid;    background-position: 50% 50%;}.jssort01 .p:hover .c {    top: 0px;    left: 0px;    width: 70px;    height: 70px;    border: #fff 1px solid;    background-position: 50% 50%;}.jssort01 .p.pdn .c {    background-position: 50% 50%;    width: 68px;    height: 68px;    border: #000 2px solid;}* html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {    /* ie quirks mode adjust */    width /**/: 72px;    height /**/: 72px;}
    
    i.fa.fa-angle-left {
    color: #fff;
    font-size: 32px;
    line-height: 83px;
    text-align: center;
    display: block;
}
    
    i.fa.fa-angle-right {
    color: #fff;
    font-size: 36px;
    text-align: center;
    line-height: 93px;
    display: block;
}

    
    .jssort01, .jssort01 > div {
    width: 751px !important;
}

    </style>




<!-- Owl Carousel css start-->

<!-- Owl Carousel css end-->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85604899-1', 'auto');
  ga('send', 'pageview');
</script>
  
  

  
  <!--modal popup-->
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        
        <div class="modal-body">
      <span data-dismiss="modal">&times;</span>
          <img src="demo" id="replaceImg" alt="image"/>
        </div>
      
      </div>
      
    </div>
  </div>
  
  
  <div class="overly">
    <div id="header">
      <div class="box">
      <button id="one">$USD</button>
        <ul class="currency">
          <li>$USD</li>
          <li>$EUR</li>
          <li>$GBP</li>
        </ul>
      </div>
      <div class="box"><img alt="" src="images/closed.png" class="closed-sidebar"></div>
      <div class="box">
      <button id="two">ENG</button>
        <ul class="language">
          <li>Afrikaans</li>
<li>Albanian</li>
<li>Amharic</li>
<li>Arabic</li>
<li>Armenian</li>
<li>Azerbaijani</li>
<li>Basque</li>
<li>Belarusian</li>
<li>Bengali</li>
<li>Bosnian</li>
<li>Bulgarian</li>
<li>Catalan</li>
<li>Cebuano</li>
<li>Chichewa</li>
<li>Chinese</li>
<li>Corsican</li>
<li>Croatian</li>
<li>Czech</li>
<li>Danish</li>
<li>Dutch</li>
<li>English</li>
<li>Esperanto</li>
<li>Estonian</li>
<li>Filipino</li>
<li>Finnish</li>
<li>French</li>
<li>Frisian</li>
<li>Galician</li>
<li>Georgian</li>
<li>German</li>
<li>Greek</li>
<li>Gujarati</li>
<li>Haitian Creole</li>
<li>Hausa</li>
<li>Hawaiian</li>
<li>Hebrew</li>
<li>Hindi</li>
<li>Hmong</li>
<li>Hungarian</li>
<li>Icelandic</li>
<li>Igbo</li>
<li>Indonesian</li>
<li>Irish</li>
<li>Italian</li>
<li>Japanese</li>
<li>Javanese</li>
<li>Kannada</li>
<li>Kazakh</li>
<li>Khmer</li>
<li>Korean</li>
<li>Kurdish (Kurmanji)</li>
<li>Kyrgyz</li>
<li>Lao</li>
<li>Latin</li>
<li>Latvian</li>
<li>Lithuanian</li>
<li>Luxembourgish</li>
<li>Macedonian</li>
<li>Malagasy</li>
<li>Malay</li>
<li>Malayalam</li>
<li>Maltese</li>
<li>Maori</li>
<li>Marathi</li>
<li>Mongolian</li>
<li>Myanmar (Burmese)</li>
<li>Nepali</li>
<li>Norwegian</li>
<li>Pashto</li>
<li>Persian</li>
<li>Polish</li>
<li>Portuguese</li>
<li>Punjabi</li>
<li>Romanian</li>
<li>Russian</li>
<li>Samoan</li>
<li>Scots Gaelic</li>
<li>Serbian</li>
<li>Sesotho</li>
<li>Shona</li>
<li>Sindhi</li>
<li>Sinhala</li>
<li>Slovak</li>
<li>Slovenian</li>
<li>Somali</li>
<li>Spanish</li>
<li>Sundanese</li>
<li>Swahili</li>
<li>Swedish</li>
<li>Tajik</li>
<li>Tamil</li>
<li>Telugu</li>
<li>Thai</li>
<li>Turkish</li>
<li>Ukrainian</li>
<li>Urdu</li>
<li>Uzbek</li>
<li>Vietnamese</li>
<li>Welsh</li>
<li>Xhosa</li>
<li>Yiddish</li>
<li>Yoruba</li>
<li>Zulu</li> 
        </ul> 
      </div>
      
      </div>
      <div class="clearfix"></div>
      
      <ul class="mobile-menu">
        <li><a href="index.html">HOME</a></li>
        <li><a href="products.html">PRODUCTS</a></li>
        <li><a href="aboutus.html">ABOUT US</a></li>
        <li><a href="contact.html">CONTACT</a></li>
        <li><a href="add-product.html">ADD YOUR PRODUCT</a></li>
      </ul>
      
    <div class="clearfix"></div>
      <ul class="share-icon">
            <li><a href="https://www.facebook.com/" target="new"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/login" target="new"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/uas/login" target="new"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://plus.google.com/collections/featured" target="new"><i class="fa fa-google-plus"></i></a></li>
          </ul>
      <div class="clearfix"></div>
      
      <div class="copyright">
        <p><a href="policy.html">Privacy.</a> <a href="terms.html">Term Of Usages.</a> <a href="usage.html">Accecptable Usage.</a></p>
      </div>
      
    </div>
  
  
  
  <!--Desktop Header-->
  
  <div class="header_section visible-mobile" id="show">
  
  <div class="products_banner"> <img src="images/product-details.jpg" class="img-responsive" alt="Portfolio Spotlight - global investment opportunity portal"> </div>
  <div class="logo_menu">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-xs-4 top_logo">
          <div class="logo"><a href="index.html"><img src="images/logo.png" alt="Portfolio Spotlight - global investment opportunity portal" title="Portfolio Spotlight - global investment opportunity portal"></a></div>
        </div>
        <div class="col-sm-9 col-xs-8">
          <div class="col-lg-12 col-xs-12">
            <div class="curency_section">
             
                <ul>
                  <li>
                    <div class="dropdown">
                      <label><span class="color_curancy">Currency : </span></label>
                      <button style="width: 74px;height: 34px;" class="btn btn-primary" id="curency_btn" type="button"><span id="mks">$ USD</span> <span class="caret"></span></button> 
                      <ul class="curencyOne c_asd">
                        <li>$ USD</li>
                        <li>$ EUR</li>
                        <li>$ GBP</li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <div class="dropdown ">
                      <label><span class="color_curancy">Language : </span></label>
                      <button style="width: 74px;height: 34px;" class="btn btn-primary" type="button" data-toggle="dropdown" id="language_btn"><span id="language">ENGLISH</span> <span class="caret"></span></button>
                      <ul class="curencyOne l_asd new-lang">
                        
                     <li>Afrikaans</li> 
<li>Albanian</li>
<li>Amharic</li>
<li>Arabic</li>
<li>Armenian</li>
<li>Azerbaijani</li>
<li>Basque</li>
<li>Belarusian</li>
<li>Bengali</li>
<li>Bosnian</li>
<li>Bulgarian</li>
<li>Catalan</li>
<li>Cebuano</li>
<li>Chichewa</li>
<li>Chinese</li>
<li>Corsican</li>
<li>Croatian</li>
<li>Czech</li>
<li>Danish</li>
<li>Dutch</li>
<li>English</li>
<li>Esperanto</li>
<li>Estonian</li>
<li>Filipino</li>
<li>Finnish</li>
<li>French</li>
<li>Frisian</li>
<li>Galician</li>
<li>Georgian</li>
<li>German</li>
<li>Greek</li>
<li>Gujarati</li>
<li>Haitian Creole</li>
<li>Hausa</li>
<li>Hawaiian</li>
<li>Hebrew</li>
<li>Hindi</li>
<li>Hmong</li>
<li>Hungarian</li>
<li>Icelandic</li>
<li>Igbo</li>
<li>Indonesian</li>
<li>Irish</li>
<li>Italian</li>
<li>Japanese</li>
<li>Javanese</li>
<li>Kannada</li>
<li>Kazakh</li>
<li>Khmer</li>
<li>Korean</li>
<li>Kurdish (Kurmanji)</li>
<li>Kyrgyz</li>
<li>Lao</li>
<li>Latin</li>
<li>Latvian</li>
<li>Lithuanian</li>
<li>Luxembourgish</li>
<li>Macedonian</li>
<li>Malagasy</li>
<li>Malay</li>
<li>Malayalam</li>
<li>Maltese</li>
<li>Maori</li>
<li>Marathi</li>
<li>Mongolian</li>
<li>Myanmar (Burmese)</li>
<li>Nepali</li>
<li>Norwegian</li>
<li>Pashto</li>
<li>Persian</li>
<li>Polish</li>
<li>Portuguese</li>
<li>Punjabi</li>
<li>Romanian</li>
<li>Russian</li>
<li>Samoan</li>
<li>Scots Gaelic</li>
<li>Serbian</li>
<li>Sesotho</li>
<li>Shona</li>
<li>Sindhi</li>
<li>Sinhala</li>
<li>Slovak</li>
<li>Slovenian</li>
<li>Somali</li>
<li>Spanish</li>
<li>Sundanese</li>
<li>Swahili</li>
<li>Swedish</li>
<li>Tajik</li>
<li>Tamil</li>
<li>Telugu</li>
<li>Thai</li>
<li>Turkish</li>
<li>Ukrainian</li>
<li>Urdu</li>
<li>Uzbek</li>
<li>Vietnamese</li>
<li>Welsh</li>
<li>Xhosa</li>
<li>Yiddish</li>
<li>Yoruba</li>
<li>Zulu</li> 



                      </ul>
                    </div>
                  </li>
                </ul>
                
                
             
            </div>
          </div>
        </div>
        <div class="logo_row">
          <div class="col-xs-12 display_logo">
            <div id="logo"><a href="index.html"><img src="images/logo.png" alt="Portfolio Spotlight - global investment opportunity portal" title="Portfolio Spotlight - global investment opportunity portal"></a></div>
          </div>
        </div>
        <div class="col-sm-9 col-xs-12 col-sm-offset-3">
          <div class="shadow_nav navbar-right">
            <nav class="navbar navbar-default"> 
              
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="index.html" class="curent">HOME</a></li>
                  <li><a href="products.html">PRODUCTS</a></li>
                  <li><a href="aboutus.html">ABOUT US</a></li>
                  <li><a href="add-product.html"><i class="fa fa-cart-plus"></i> ADD YOUR PRODUCT</a></li>
                </ul>
              </div>
              <!-- /.navbar-collapse --> 
              <!-- /.container-fluid --> 
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="for_prodcut_page_sec">
  <div class="find_products_sec topspace">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="banner_find_heading">
            <h1>PRODUCT DETAILS<span></span> </h1>
           
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
 
</div>

  
  
  <div class="detils-content">
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
        
         <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #fff;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
            <div data-p="144.50">
                <img data-u="image" src="images/01.jpg" alt="image"/>
                <img data-u="thumb" src="images/thumb-01.jpg" alt="image"/>
            </div>
            <div data-p="144.50" style="display: none;" >
                <img data-u="image" src="images/02.jpg" alt="image"/>
                <img data-u="thumb" src="images/thumb-02.jpg" alt="image"/>
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="images/03.jpg" alt="image"/>
                <img data-u="thumb" src="images/thumb-03.jpg" alt="image"/>
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="images/04.jpg" alt="image"/>
                <img data-u="thumb" src="images/thumb-04.jpg" alt="image"/>
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="images/05.jpg" alt="image"/>
                <img data-u="thumb" src="images/thumb-05.jpg" alt="image"/>
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Image Gallery</a>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="images/06.jpg" alt="image"/>
                <img data-u="thumb" src="images/thumb-06.jpg" alt="image"/>
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="images/07.jpg" alt="image"/>
                <img data-u="thumb" src="images/thumb-07.jpg" alt="image"/>
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="images/08.jpg" alt="image"/>
                <img data-u="thumb" src="images/thumb-08.jpg" alt="image"/>
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="images/09.jpg" alt="image"/>
                <img data-u="thumb" src="images/thumb-09.jpg" alt="image"/>
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="images/10.jpg" alt="image"/>
                <img data-u="thumb" src="images/thumb-10.jpg" alt="image"/>
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="images/11.jpg" alt="image"/>
                <img data-u="thumb" src="images/thumb-11.jpg" alt="image"/>
            </div>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="images/12.jpg" alt="image"/>
                <img data-u="thumb" src="images/thumb-12.jpg" alt="image"/>
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="background:#683aa0;height:87px;left:0;top:356px;width:37px;
"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
        <span data-u="arrowright" class="jssora05r rihgtarrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
    </div>

        
        <div class="slidertext">
          <p>Yield: <span>£50,000</span></p>
          <p>Launch Date: <span>08.08.2017</span></p>
          <p>Completion Date:  <span>09.10.2017</span></p>
          <p>Country: <span>United Kingdom</span></p>
        </div>
        
        
        
        
      </div>
      <div class="col-sm-6 rightspacing">
        <h3>Grattan House</h3>
        <h4>Bradford</h4>
        
        <p class="purple">Student Apartments</p>
        <p class="purple pera">£500,000</p>
        
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
        
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
        
        <p class="purple">Exit Stratgy</p>
        <p class="paddingNo">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
      </div>
      
    </div>
  </div>
  </div>
  
  
  
  
    
  
  
  
  
  <div class="container">
  <h2 class="title-tag detiltag">GET IN TOUCH WITH US</h2>
  
  <div class="row paddingBottom no-padding-spot"> 
  <div class="form-inner">
    <div class="col-sm-4">
      <input type="text" class="form-control black" placeholder="First Name" required="">
    </div>
    <div class="col-sm-4">
      <input type="text" class="form-control black" placeholder="Last Name" required="">
    </div>
    <div class="col-sm-4">
      <input type="text" class="form-control black" placeholder="Email" required="">
    </div>
  </div>
    </div>
  
  <div class="row paddingBottom">
  <div class="form-inner">
    <div class="col-sm-4">
      <div class="intl-tel-input"><div class="flag-container"><div tabindex="0" class="selected-flag" title="United Arab Emirates (&#8235;الإمارات العربية المتحدة&#8236;&lrm;): +971"><div class="iti-flag ae"></div><div class="arrow"></div></div><ul class="country-list hide"><li class="country preferred active" data-dial-code="971" data-country-code="ae"><div class="flag"><div class="iti-flag ae"></div></div><span class="country-name">United Arab Emirates (&#8235;الإمارات العربية المتحدة&#8236;&lrm;)</span><span class="dial-code">+971</span></li><li class="country preferred" data-dial-code="44" data-country-code="gb"><div class="flag"><div class="iti-flag gb"></div></div><span class="country-name">United Kingdom</span><span class="dial-code">+44</span></li><li class="divider"></li><li class="country" data-dial-code="93" data-country-code="af"><div class="flag"><div class="iti-flag af"></div></div><span class="country-name">Afghanistan (&#8235;افغانستان&#8236;&lrm;)</span><span class="dial-code">+93</span></li><li class="country" data-dial-code="355" data-country-code="al"><div class="flag"><div class="iti-flag al"></div></div><span class="country-name">Albania (Shqipëri)</span><span class="dial-code">+355</span></li><li class="country" data-dial-code="213" data-country-code="dz"><div class="flag"><div class="iti-flag dz"></div></div><span class="country-name">Algeria (&#8235;الجزائر&#8236;&lrm;)</span><span class="dial-code">+213</span></li><li class="country" data-dial-code="1684" data-country-code="as"><div class="flag"><div class="iti-flag as"></div></div><span class="country-name">American Samoa</span><span class="dial-code">+1684</span></li><li class="country" data-dial-code="376" data-country-code="ad"><div class="flag"><div class="iti-flag ad"></div></div><span class="country-name">Andorra</span><span class="dial-code">+376</span></li><li class="country" data-dial-code="244" data-country-code="ao"><div class="flag"><div class="iti-flag ao"></div></div><span class="country-name">Angola</span><span class="dial-code">+244</span></li><li class="country" data-dial-code="1264" data-country-code="ai"><div class="flag"><div class="iti-flag ai"></div></div><span class="country-name">Anguilla</span><span class="dial-code">+1264</span></li><li class="country" data-dial-code="1268" data-country-code="ag"><div class="flag"><div class="iti-flag ag"></div></div><span class="country-name">Antigua and Barbuda</span><span class="dial-code">+1268</span></li><li class="country" data-dial-code="54" data-country-code="ar"><div class="flag"><div class="iti-flag ar"></div></div><span class="country-name">Argentina</span><span class="dial-code">+54</span></li><li class="country" data-dial-code="374" data-country-code="am"><div class="flag"><div class="iti-flag am"></div></div><span class="country-name">Armenia (Հայաստան)</span><span class="dial-code">+374</span></li><li class="country" data-dial-code="297" data-country-code="aw"><div class="flag"><div class="iti-flag aw"></div></div><span class="country-name">Aruba</span><span class="dial-code">+297</span></li><li class="country" data-dial-code="61" data-country-code="au"><div class="flag"><div class="iti-flag au"></div></div><span class="country-name">Australia</span><span class="dial-code">+61</span></li><li class="country" data-dial-code="43" data-country-code="at"><div class="flag"><div class="iti-flag at"></div></div><span class="country-name">Austria (Österreich)</span><span class="dial-code">+43</span></li><li class="country" data-dial-code="994" data-country-code="az"><div class="flag"><div class="iti-flag az"></div></div><span class="country-name">Azerbaijan (Azərbaycan)</span><span class="dial-code">+994</span></li><li class="country" data-dial-code="1242" data-country-code="bs"><div class="flag"><div class="iti-flag bs"></div></div><span class="country-name">Bahamas</span><span class="dial-code">+1242</span></li><li class="country" data-dial-code="973" data-country-code="bh"><div class="flag"><div class="iti-flag bh"></div></div><span class="country-name">Bahrain (&#8235;البحرين&#8236;&lrm;)</span><span class="dial-code">+973</span></li><li class="country" data-dial-code="880" data-country-code="bd"><div class="flag"><div class="iti-flag bd"></div></div><span class="country-name">Bangladesh (বাংলাদেশ)</span><span class="dial-code">+880</span></li><li class="country" data-dial-code="1246" data-country-code="bb"><div class="flag"><div class="iti-flag bb"></div></div><span class="country-name">Barbados</span><span class="dial-code">+1246</span></li><li class="country" data-dial-code="375" data-country-code="by"><div class="flag"><div class="iti-flag by"></div></div><span class="country-name">Belarus (Беларусь)</span><span class="dial-code">+375</span></li><li class="country" data-dial-code="32" data-country-code="be"><div class="flag"><div class="iti-flag be"></div></div><span class="country-name">Belgium (België)</span><span class="dial-code">+32</span></li><li class="country" data-dial-code="501" data-country-code="bz"><div class="flag"><div class="iti-flag bz"></div></div><span class="country-name">Belize</span><span class="dial-code">+501</span></li><li class="country" data-dial-code="229" data-country-code="bj"><div class="flag"><div class="iti-flag bj"></div></div><span class="country-name">Benin (Bénin)</span><span class="dial-code">+229</span></li><li class="country" data-dial-code="1441" data-country-code="bm"><div class="flag"><div class="iti-flag bm"></div></div><span class="country-name">Bermuda</span><span class="dial-code">+1441</span></li><li class="country" data-dial-code="975" data-country-code="bt"><div class="flag"><div class="iti-flag bt"></div></div><span class="country-name">Bhutan (འབྲུག)</span><span class="dial-code">+975</span></li><li class="country" data-dial-code="591" data-country-code="bo"><div class="flag"><div class="iti-flag bo"></div></div><span class="country-name">Bolivia</span><span class="dial-code">+591</span></li><li class="country" data-dial-code="387" data-country-code="ba"><div class="flag"><div class="iti-flag ba"></div></div><span class="country-name">Bosnia and Herzegovina (Босна и Херцеговина)</span><span class="dial-code">+387</span></li><li class="country" data-dial-code="267" data-country-code="bw"><div class="flag"><div class="iti-flag bw"></div></div><span class="country-name">Botswana</span><span class="dial-code">+267</span></li><li class="country" data-dial-code="55" data-country-code="br"><div class="flag"><div class="iti-flag br"></div></div><span class="country-name">Brazil (Brasil)</span><span class="dial-code">+55</span></li><li class="country" data-dial-code="246" data-country-code="io"><div class="flag"><div class="iti-flag io"></div></div><span class="country-name">British Indian Ocean Territory</span><span class="dial-code">+246</span></li><li class="country" data-dial-code="1284" data-country-code="vg"><div class="flag"><div class="iti-flag vg"></div></div><span class="country-name">British Virgin Islands</span><span class="dial-code">+1284</span></li><li class="country" data-dial-code="673" data-country-code="bn"><div class="flag"><div class="iti-flag bn"></div></div><span class="country-name">Brunei</span><span class="dial-code">+673</span></li><li class="country" data-dial-code="359" data-country-code="bg"><div class="flag"><div class="iti-flag bg"></div></div><span class="country-name">Bulgaria (България)</span><span class="dial-code">+359</span></li><li class="country" data-dial-code="226" data-country-code="bf"><div class="flag"><div class="iti-flag bf"></div></div><span class="country-name">Burkina Faso</span><span class="dial-code">+226</span></li><li class="country" data-dial-code="257" data-country-code="bi"><div class="flag"><div class="iti-flag bi"></div></div><span class="country-name">Burundi (Uburundi)</span><span class="dial-code">+257</span></li><li class="country" data-dial-code="855" data-country-code="kh"><div class="flag"><div class="iti-flag kh"></div></div><span class="country-name">Cambodia (កម្ពុជា)</span><span class="dial-code">+855</span></li><li class="country" data-dial-code="237" data-country-code="cm"><div class="flag"><div class="iti-flag cm"></div></div><span class="country-name">Cameroon (Cameroun)</span><span class="dial-code">+237</span></li><li class="country" data-dial-code="1" data-country-code="ca"><div class="flag"><div class="iti-flag ca"></div></div><span class="country-name">Canada</span><span class="dial-code">+1</span></li><li class="country" data-dial-code="238" data-country-code="cv"><div class="flag"><div class="iti-flag cv"></div></div><span class="country-name">Cape Verde (Kabu Verdi)</span><span class="dial-code">+238</span></li><li class="country" data-dial-code="599" data-country-code="bq"><div class="flag"><div class="iti-flag bq"></div></div><span class="country-name">Caribbean Netherlands</span><span class="dial-code">+599</span></li><li class="country" data-dial-code="1345" data-country-code="ky"><div class="flag"><div class="iti-flag ky"></div></div><span class="country-name">Cayman Islands</span><span class="dial-code">+1345</span></li><li class="country" data-dial-code="236" data-country-code="cf"><div class="flag"><div class="iti-flag cf"></div></div><span class="country-name">Central African Republic (République centrafricaine)</span><span class="dial-code">+236</span></li><li class="country" data-dial-code="235" data-country-code="td"><div class="flag"><div class="iti-flag td"></div></div><span class="country-name">Chad (Tchad)</span><span class="dial-code">+235</span></li><li class="country" data-dial-code="56" data-country-code="cl"><div class="flag"><div class="iti-flag cl"></div></div><span class="country-name">Chile</span><span class="dial-code">+56</span></li><li class="country" data-dial-code="86" data-country-code="cn"><div class="flag"><div class="iti-flag cn"></div></div><span class="country-name">China (中国)</span><span class="dial-code">+86</span></li><li class="country" data-dial-code="61" data-country-code="cx"><div class="flag"><div class="iti-flag cx"></div></div><span class="country-name">Christmas Island</span><span class="dial-code">+61</span></li><li class="country" data-dial-code="61" data-country-code="cc"><div class="flag"><div class="iti-flag cc"></div></div><span class="country-name">Cocos (Keeling) Islands</span><span class="dial-code">+61</span></li><li class="country" data-dial-code="57" data-country-code="co"><div class="flag"><div class="iti-flag co"></div></div><span class="country-name">Colombia</span><span class="dial-code">+57</span></li><li class="country" data-dial-code="269" data-country-code="km"><div class="flag"><div class="iti-flag km"></div></div><span class="country-name">Comoros (&#8235;جزر القمر&#8236;&lrm;)</span><span class="dial-code">+269</span></li><li class="country" data-dial-code="243" data-country-code="cd"><div class="flag"><div class="iti-flag cd"></div></div><span class="country-name">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</span><span class="dial-code">+243</span></li><li class="country" data-dial-code="242" data-country-code="cg"><div class="flag"><div class="iti-flag cg"></div></div><span class="country-name">Congo (Republic) (Congo-Brazzaville)</span><span class="dial-code">+242</span></li><li class="country" data-dial-code="682" data-country-code="ck"><div class="flag"><div class="iti-flag ck"></div></div><span class="country-name">Cook Islands</span><span class="dial-code">+682</span></li><li class="country" data-dial-code="506" data-country-code="cr"><div class="flag"><div class="iti-flag cr"></div></div><span class="country-name">Costa Rica</span><span class="dial-code">+506</span></li><li class="country" data-dial-code="225" data-country-code="ci"><div class="flag"><div class="iti-flag ci"></div></div><span class="country-name">Côte d’Ivoire</span><span class="dial-code">+225</span></li><li class="country" data-dial-code="385" data-country-code="hr"><div class="flag"><div class="iti-flag hr"></div></div><span class="country-name">Croatia (Hrvatska)</span><span class="dial-code">+385</span></li><li class="country" data-dial-code="53" data-country-code="cu"><div class="flag"><div class="iti-flag cu"></div></div><span class="country-name">Cuba</span><span class="dial-code">+53</span></li><li class="country" data-dial-code="599" data-country-code="cw"><div class="flag"><div class="iti-flag cw"></div></div><span class="country-name">Curaçao</span><span class="dial-code">+599</span></li><li class="country" data-dial-code="357" data-country-code="cy"><div class="flag"><div class="iti-flag cy"></div></div><span class="country-name">Cyprus (Κύπρος)</span><span class="dial-code">+357</span></li><li class="country" data-dial-code="420" data-country-code="cz"><div class="flag"><div class="iti-flag cz"></div></div><span class="country-name">Czech Republic (Česká republika)</span><span class="dial-code">+420</span></li><li class="country" data-dial-code="45" data-country-code="dk"><div class="flag"><div class="iti-flag dk"></div></div><span class="country-name">Denmark (Danmark)</span><span class="dial-code">+45</span></li><li class="country" data-dial-code="253" data-country-code="dj"><div class="flag"><div class="iti-flag dj"></div></div><span class="country-name">Djibouti</span><span class="dial-code">+253</span></li><li class="country" data-dial-code="1767" data-country-code="dm"><div class="flag"><div class="iti-flag dm"></div></div><span class="country-name">Dominica</span><span class="dial-code">+1767</span></li><li class="country" data-dial-code="1" data-country-code="do"><div class="flag"><div class="iti-flag do"></div></div><span class="country-name">Dominican Republic (República Dominicana)</span><span class="dial-code">+1</span></li><li class="country" data-dial-code="593" data-country-code="ec"><div class="flag"><div class="iti-flag ec"></div></div><span class="country-name">Ecuador</span><span class="dial-code">+593</span></li><li class="country" data-dial-code="20" data-country-code="eg"><div class="flag"><div class="iti-flag eg"></div></div><span class="country-name">Egypt (&#8235;مصر&#8236;&lrm;)</span><span class="dial-code">+20</span></li><li class="country" data-dial-code="503" data-country-code="sv"><div class="flag"><div class="iti-flag sv"></div></div><span class="country-name">El Salvador</span><span class="dial-code">+503</span></li><li class="country" data-dial-code="240" data-country-code="gq"><div class="flag"><div class="iti-flag gq"></div></div><span class="country-name">Equatorial Guinea (Guinea Ecuatorial)</span><span class="dial-code">+240</span></li><li class="country" data-dial-code="291" data-country-code="er"><div class="flag"><div class="iti-flag er"></div></div><span class="country-name">Eritrea</span><span class="dial-code">+291</span></li><li class="country" data-dial-code="372" data-country-code="ee"><div class="flag"><div class="iti-flag ee"></div></div><span class="country-name">Estonia (Eesti)</span><span class="dial-code">+372</span></li><li class="country" data-dial-code="251" data-country-code="et"><div class="flag"><div class="iti-flag et"></div></div><span class="country-name">Ethiopia</span><span class="dial-code">+251</span></li><li class="country" data-dial-code="500" data-country-code="fk"><div class="flag"><div class="iti-flag fk"></div></div><span class="country-name">Falkland Islands (Islas Malvinas)</span><span class="dial-code">+500</span></li><li class="country" data-dial-code="298" data-country-code="fo"><div class="flag"><div class="iti-flag fo"></div></div><span class="country-name">Faroe Islands (Føroyar)</span><span class="dial-code">+298</span></li><li class="country" data-dial-code="679" data-country-code="fj"><div class="flag"><div class="iti-flag fj"></div></div><span class="country-name">Fiji</span><span class="dial-code">+679</span></li><li class="country" data-dial-code="358" data-country-code="fi"><div class="flag"><div class="iti-flag fi"></div></div><span class="country-name">Finland (Suomi)</span><span class="dial-code">+358</span></li><li class="country" data-dial-code="33" data-country-code="fr"><div class="flag"><div class="iti-flag fr"></div></div><span class="country-name">France</span><span class="dial-code">+33</span></li><li class="country" data-dial-code="594" data-country-code="gf"><div class="flag"><div class="iti-flag gf"></div></div><span class="country-name">French Guiana (Guyane française)</span><span class="dial-code">+594</span></li><li class="country" data-dial-code="689" data-country-code="pf"><div class="flag"><div class="iti-flag pf"></div></div><span class="country-name">French Polynesia (Polynésie française)</span><span class="dial-code">+689</span></li><li class="country" data-dial-code="241" data-country-code="ga"><div class="flag"><div class="iti-flag ga"></div></div><span class="country-name">Gabon</span><span class="dial-code">+241</span></li><li class="country" data-dial-code="220" data-country-code="gm"><div class="flag"><div class="iti-flag gm"></div></div><span class="country-name">Gambia</span><span class="dial-code">+220</span></li><li class="country" data-dial-code="995" data-country-code="ge"><div class="flag"><div class="iti-flag ge"></div></div><span class="country-name">Georgia (საქართველო)</span><span class="dial-code">+995</span></li><li class="country" data-dial-code="49" data-country-code="de"><div class="flag"><div class="iti-flag de"></div></div><span class="country-name">Germany (Deutschland)</span><span class="dial-code">+49</span></li><li class="country" data-dial-code="233" data-country-code="gh"><div class="flag"><div class="iti-flag gh"></div></div><span class="country-name">Ghana (Gaana)</span><span class="dial-code">+233</span></li><li class="country" data-dial-code="350" data-country-code="gi"><div class="flag"><div class="iti-flag gi"></div></div><span class="country-name">Gibraltar</span><span class="dial-code">+350</span></li><li class="country" data-dial-code="30" data-country-code="gr"><div class="flag"><div class="iti-flag gr"></div></div><span class="country-name">Greece (Ελλάδα)</span><span class="dial-code">+30</span></li><li class="country" data-dial-code="299" data-country-code="gl"><div class="flag"><div class="iti-flag gl"></div></div><span class="country-name">Greenland (Kalaallit Nunaat)</span><span class="dial-code">+299</span></li><li class="country" data-dial-code="1473" data-country-code="gd"><div class="flag"><div class="iti-flag gd"></div></div><span class="country-name">Grenada</span><span class="dial-code">+1473</span></li><li class="country" data-dial-code="590" data-country-code="gp"><div class="flag"><div class="iti-flag gp"></div></div><span class="country-name">Guadeloupe</span><span class="dial-code">+590</span></li><li class="country" data-dial-code="1671" data-country-code="gu"><div class="flag"><div class="iti-flag gu"></div></div><span class="country-name">Guam</span><span class="dial-code">+1671</span></li><li class="country" data-dial-code="502" data-country-code="gt"><div class="flag"><div class="iti-flag gt"></div></div><span class="country-name">Guatemala</span><span class="dial-code">+502</span></li><li class="country" data-dial-code="44" data-country-code="gg"><div class="flag"><div class="iti-flag gg"></div></div><span class="country-name">Guernsey</span><span class="dial-code">+44</span></li><li class="country" data-dial-code="224" data-country-code="gn"><div class="flag"><div class="iti-flag gn"></div></div><span class="country-name">Guinea (Guinée)</span><span class="dial-code">+224</span></li><li class="country" data-dial-code="245" data-country-code="gw"><div class="flag"><div class="iti-flag gw"></div></div><span class="country-name">Guinea-Bissau (Guiné Bissau)</span><span class="dial-code">+245</span></li><li class="country" data-dial-code="592" data-country-code="gy"><div class="flag"><div class="iti-flag gy"></div></div><span class="country-name">Guyana</span><span class="dial-code">+592</span></li><li class="country" data-dial-code="509" data-country-code="ht"><div class="flag"><div class="iti-flag ht"></div></div><span class="country-name">Haiti</span><span class="dial-code">+509</span></li><li class="country" data-dial-code="504" data-country-code="hn"><div class="flag"><div class="iti-flag hn"></div></div><span class="country-name">Honduras</span><span class="dial-code">+504</span></li><li class="country" data-dial-code="852" data-country-code="hk"><div class="flag"><div class="iti-flag hk"></div></div><span class="country-name">Hong Kong (香港)</span><span class="dial-code">+852</span></li><li class="country" data-dial-code="36" data-country-code="hu"><div class="flag"><div class="iti-flag hu"></div></div><span class="country-name">Hungary (Magyarország)</span><span class="dial-code">+36</span></li><li class="country" data-dial-code="354" data-country-code="is"><div class="flag"><div class="iti-flag is"></div></div><span class="country-name">Iceland (Ísland)</span><span class="dial-code">+354</span></li><li class="country" data-dial-code="91" data-country-code="in"><div class="flag"><div class="iti-flag in"></div></div><span class="country-name">India (भारत)</span><span class="dial-code">+91</span></li><li class="country" data-dial-code="62" data-country-code="id"><div class="flag"><div class="iti-flag id"></div></div><span class="country-name">Indonesia</span><span class="dial-code">+62</span></li><li class="country" data-dial-code="98" data-country-code="ir"><div class="flag"><div class="iti-flag ir"></div></div><span class="country-name">Iran (&#8235;ایران&#8236;&lrm;)</span><span class="dial-code">+98</span></li><li class="country" data-dial-code="964" data-country-code="iq"><div class="flag"><div class="iti-flag iq"></div></div><span class="country-name">Iraq (&#8235;العراق&#8236;&lrm;)</span><span class="dial-code">+964</span></li><li class="country" data-dial-code="353" data-country-code="ie"><div class="flag"><div class="iti-flag ie"></div></div><span class="country-name">Ireland</span><span class="dial-code">+353</span></li><li class="country" data-dial-code="44" data-country-code="im"><div class="flag"><div class="iti-flag im"></div></div><span class="country-name">Isle of Man</span><span class="dial-code">+44</span></li><li class="country" data-dial-code="972" data-country-code="il"><div class="flag"><div class="iti-flag il"></div></div><span class="country-name">Israel (&#8235;ישראל&#8236;&lrm;)</span><span class="dial-code">+972</span></li><li class="country" data-dial-code="39" data-country-code="it"><div class="flag"><div class="iti-flag it"></div></div><span class="country-name">Italy (Italia)</span><span class="dial-code">+39</span></li><li class="country" data-dial-code="1876" data-country-code="jm"><div class="flag"><div class="iti-flag jm"></div></div><span class="country-name">Jamaica</span><span class="dial-code">+1876</span></li><li class="country" data-dial-code="81" data-country-code="jp"><div class="flag"><div class="iti-flag jp"></div></div><span class="country-name">Japan (日本)</span><span class="dial-code">+81</span></li><li class="country" data-dial-code="44" data-country-code="je"><div class="flag"><div class="iti-flag je"></div></div><span class="country-name">Jersey</span><span class="dial-code">+44</span></li><li class="country" data-dial-code="962" data-country-code="jo"><div class="flag"><div class="iti-flag jo"></div></div><span class="country-name">Jordan (&#8235;الأردن&#8236;&lrm;)</span><span class="dial-code">+962</span></li><li class="country" data-dial-code="7" data-country-code="kz"><div class="flag"><div class="iti-flag kz"></div></div><span class="country-name">Kazakhstan (Казахстан)</span><span class="dial-code">+7</span></li><li class="country" data-dial-code="254" data-country-code="ke"><div class="flag"><div class="iti-flag ke"></div></div><span class="country-name">Kenya</span><span class="dial-code">+254</span></li><li class="country" data-dial-code="686" data-country-code="ki"><div class="flag"><div class="iti-flag ki"></div></div><span class="country-name">Kiribati</span><span class="dial-code">+686</span></li><li class="country" data-dial-code="965" data-country-code="kw"><div class="flag"><div class="iti-flag kw"></div></div><span class="country-name">Kuwait (&#8235;الكويت&#8236;&lrm;)</span><span class="dial-code">+965</span></li><li class="country" data-dial-code="996" data-country-code="kg"><div class="flag"><div class="iti-flag kg"></div></div><span class="country-name">Kyrgyzstan (Кыргызстан)</span><span class="dial-code">+996</span></li><li class="country" data-dial-code="856" data-country-code="la"><div class="flag"><div class="iti-flag la"></div></div><span class="country-name">Laos (ລາວ)</span><span class="dial-code">+856</span></li><li class="country" data-dial-code="371" data-country-code="lv"><div class="flag"><div class="iti-flag lv"></div></div><span class="country-name">Latvia (Latvija)</span><span class="dial-code">+371</span></li><li class="country" data-dial-code="961" data-country-code="lb"><div class="flag"><div class="iti-flag lb"></div></div><span class="country-name">Lebanon (&#8235;لبنان&#8236;&lrm;)</span><span class="dial-code">+961</span></li><li class="country" data-dial-code="266" data-country-code="ls"><div class="flag"><div class="iti-flag ls"></div></div><span class="country-name">Lesotho</span><span class="dial-code">+266</span></li><li class="country" data-dial-code="231" data-country-code="lr"><div class="flag"><div class="iti-flag lr"></div></div><span class="country-name">Liberia</span><span class="dial-code">+231</span></li><li class="country" data-dial-code="218" data-country-code="ly"><div class="flag"><div class="iti-flag ly"></div></div><span class="country-name">Libya (&#8235;ليبيا&#8236;&lrm;)</span><span class="dial-code">+218</span></li><li class="country" data-dial-code="423" data-country-code="li"><div class="flag"><div class="iti-flag li"></div></div><span class="country-name">Liechtenstein</span><span class="dial-code">+423</span></li><li class="country" data-dial-code="370" data-country-code="lt"><div class="flag"><div class="iti-flag lt"></div></div><span class="country-name">Lithuania (Lietuva)</span><span class="dial-code">+370</span></li><li class="country" data-dial-code="352" data-country-code="lu"><div class="flag"><div class="iti-flag lu"></div></div><span class="country-name">Luxembourg</span><span class="dial-code">+352</span></li><li class="country" data-dial-code="853" data-country-code="mo"><div class="flag"><div class="iti-flag mo"></div></div><span class="country-name">Macau (澳門)</span><span class="dial-code">+853</span></li><li class="country" data-dial-code="389" data-country-code="mk"><div class="flag"><div class="iti-flag mk"></div></div><span class="country-name">Macedonia (FYROM) (Македонија)</span><span class="dial-code">+389</span></li><li class="country" data-dial-code="261" data-country-code="mg"><div class="flag"><div class="iti-flag mg"></div></div><span class="country-name">Madagascar (Madagasikara)</span><span class="dial-code">+261</span></li><li class="country" data-dial-code="265" data-country-code="mw"><div class="flag"><div class="iti-flag mw"></div></div><span class="country-name">Malawi</span><span class="dial-code">+265</span></li><li class="country" data-dial-code="60" data-country-code="my"><div class="flag"><div class="iti-flag my"></div></div><span class="country-name">Malaysia</span><span class="dial-code">+60</span></li><li class="country" data-dial-code="960" data-country-code="mv"><div class="flag"><div class="iti-flag mv"></div></div><span class="country-name">Maldives</span><span class="dial-code">+960</span></li><li class="country" data-dial-code="223" data-country-code="ml"><div class="flag"><div class="iti-flag ml"></div></div><span class="country-name">Mali</span><span class="dial-code">+223</span></li><li class="country" data-dial-code="356" data-country-code="mt"><div class="flag"><div class="iti-flag mt"></div></div><span class="country-name">Malta</span><span class="dial-code">+356</span></li><li class="country" data-dial-code="692" data-country-code="mh"><div class="flag"><div class="iti-flag mh"></div></div><span class="country-name">Marshall Islands</span><span class="dial-code">+692</span></li><li class="country" data-dial-code="596" data-country-code="mq"><div class="flag"><div class="iti-flag mq"></div></div><span class="country-name">Martinique</span><span class="dial-code">+596</span></li><li class="country" data-dial-code="222" data-country-code="mr"><div class="flag"><div class="iti-flag mr"></div></div><span class="country-name">Mauritania (&#8235;موريتانيا&#8236;&lrm;)</span><span class="dial-code">+222</span></li><li class="country" data-dial-code="230" data-country-code="mu"><div class="flag"><div class="iti-flag mu"></div></div><span class="country-name">Mauritius (Moris)</span><span class="dial-code">+230</span></li><li class="country" data-dial-code="262" data-country-code="yt"><div class="flag"><div class="iti-flag yt"></div></div><span class="country-name">Mayotte</span><span class="dial-code">+262</span></li><li class="country" data-dial-code="52" data-country-code="mx"><div class="flag"><div class="iti-flag mx"></div></div><span class="country-name">Mexico (México)</span><span class="dial-code">+52</span></li><li class="country" data-dial-code="691" data-country-code="fm"><div class="flag"><div class="iti-flag fm"></div></div><span class="country-name">Micronesia</span><span class="dial-code">+691</span></li><li class="country" data-dial-code="373" data-country-code="md"><div class="flag"><div class="iti-flag md"></div></div><span class="country-name">Moldova (Republica Moldova)</span><span class="dial-code">+373</span></li><li class="country" data-dial-code="377" data-country-code="mc"><div class="flag"><div class="iti-flag mc"></div></div><span class="country-name">Monaco</span><span class="dial-code">+377</span></li><li class="country" data-dial-code="976" data-country-code="mn"><div class="flag"><div class="iti-flag mn"></div></div><span class="country-name">Mongolia (Монгол)</span><span class="dial-code">+976</span></li><li class="country" data-dial-code="382" data-country-code="me"><div class="flag"><div class="iti-flag me"></div></div><span class="country-name">Montenegro (Crna Gora)</span><span class="dial-code">+382</span></li><li class="country" data-dial-code="1664" data-country-code="ms"><div class="flag"><div class="iti-flag ms"></div></div><span class="country-name">Montserrat</span><span class="dial-code">+1664</span></li><li class="country" data-dial-code="212" data-country-code="ma"><div class="flag"><div class="iti-flag ma"></div></div><span class="country-name">Morocco (&#8235;المغرب&#8236;&lrm;)</span><span class="dial-code">+212</span></li><li class="country" data-dial-code="258" data-country-code="mz"><div class="flag"><div class="iti-flag mz"></div></div><span class="country-name">Mozambique (Moçambique)</span><span class="dial-code">+258</span></li><li class="country" data-dial-code="95" data-country-code="mm"><div class="flag"><div class="iti-flag mm"></div></div><span class="country-name">Myanmar (Burma) (မြန်မာ)</span><span class="dial-code">+95</span></li><li class="country" data-dial-code="264" data-country-code="na"><div class="flag"><div class="iti-flag na"></div></div><span class="country-name">Namibia (Namibië)</span><span class="dial-code">+264</span></li><li class="country" data-dial-code="674" data-country-code="nr"><div class="flag"><div class="iti-flag nr"></div></div><span class="country-name">Nauru</span><span class="dial-code">+674</span></li><li class="country" data-dial-code="977" data-country-code="np"><div class="flag"><div class="iti-flag np"></div></div><span class="country-name">Nepal (नेपाल)</span><span class="dial-code">+977</span></li><li class="country" data-dial-code="31" data-country-code="nl"><div class="flag"><div class="iti-flag nl"></div></div><span class="country-name">Netherlands (Nederland)</span><span class="dial-code">+31</span></li><li class="country" data-dial-code="687" data-country-code="nc"><div class="flag"><div class="iti-flag nc"></div></div><span class="country-name">New Caledonia (Nouvelle-Calédonie)</span><span class="dial-code">+687</span></li><li class="country" data-dial-code="64" data-country-code="nz"><div class="flag"><div class="iti-flag nz"></div></div><span class="country-name">New Zealand</span><span class="dial-code">+64</span></li><li class="country" data-dial-code="505" data-country-code="ni"><div class="flag"><div class="iti-flag ni"></div></div><span class="country-name">Nicaragua</span><span class="dial-code">+505</span></li><li class="country" data-dial-code="227" data-country-code="ne"><div class="flag"><div class="iti-flag ne"></div></div><span class="country-name">Niger (Nijar)</span><span class="dial-code">+227</span></li><li class="country" data-dial-code="234" data-country-code="ng"><div class="flag"><div class="iti-flag ng"></div></div><span class="country-name">Nigeria</span><span class="dial-code">+234</span></li><li class="country" data-dial-code="683" data-country-code="nu"><div class="flag"><div class="iti-flag nu"></div></div><span class="country-name">Niue</span><span class="dial-code">+683</span></li><li class="country" data-dial-code="672" data-country-code="nf"><div class="flag"><div class="iti-flag nf"></div></div><span class="country-name">Norfolk Island</span><span class="dial-code">+672</span></li><li class="country" data-dial-code="850" data-country-code="kp"><div class="flag"><div class="iti-flag kp"></div></div><span class="country-name">North Korea (조선 민주주의 인민 공화국)</span><span class="dial-code">+850</span></li><li class="country" data-dial-code="1670" data-country-code="mp"><div class="flag"><div class="iti-flag mp"></div></div><span class="country-name">Northern Mariana Islands</span><span class="dial-code">+1670</span></li><li class="country" data-dial-code="47" data-country-code="no"><div class="flag"><div class="iti-flag no"></div></div><span class="country-name">Norway (Norge)</span><span class="dial-code">+47</span></li><li class="country" data-dial-code="968" data-country-code="om"><div class="flag"><div class="iti-flag om"></div></div><span class="country-name">Oman (&#8235;عُمان&#8236;&lrm;)</span><span class="dial-code">+968</span></li><li class="country" data-dial-code="92" data-country-code="pk"><div class="flag"><div class="iti-flag pk"></div></div><span class="country-name">Pakistan (&#8235;پاکستان&#8236;&lrm;)</span><span class="dial-code">+92</span></li><li class="country" data-dial-code="680" data-country-code="pw"><div class="flag"><div class="iti-flag pw"></div></div><span class="country-name">Palau</span><span class="dial-code">+680</span></li><li class="country" data-dial-code="970" data-country-code="ps"><div class="flag"><div class="iti-flag ps"></div></div><span class="country-name">Palestine (&#8235;فلسطين&#8236;&lrm;)</span><span class="dial-code">+970</span></li><li class="country" data-dial-code="507" data-country-code="pa"><div class="flag"><div class="iti-flag pa"></div></div><span class="country-name">Panama (Panamá)</span><span class="dial-code">+507</span></li><li class="country" data-dial-code="675" data-country-code="pg"><div class="flag"><div class="iti-flag pg"></div></div><span class="country-name">Papua New Guinea</span><span class="dial-code">+675</span></li><li class="country" data-dial-code="595" data-country-code="py"><div class="flag"><div class="iti-flag py"></div></div><span class="country-name">Paraguay</span><span class="dial-code">+595</span></li><li class="country" data-dial-code="51" data-country-code="pe"><div class="flag"><div class="iti-flag pe"></div></div><span class="country-name">Peru (Perú)</span><span class="dial-code">+51</span></li><li class="country" data-dial-code="63" data-country-code="ph"><div class="flag"><div class="iti-flag ph"></div></div><span class="country-name">Philippines</span><span class="dial-code">+63</span></li><li class="country" data-dial-code="48" data-country-code="pl"><div class="flag"><div class="iti-flag pl"></div></div><span class="country-name">Poland (Polska)</span><span class="dial-code">+48</span></li><li class="country" data-dial-code="351" data-country-code="pt"><div class="flag"><div class="iti-flag pt"></div></div><span class="country-name">Portugal</span><span class="dial-code">+351</span></li><li class="country" data-dial-code="1" data-country-code="pr"><div class="flag"><div class="iti-flag pr"></div></div><span class="country-name">Puerto Rico</span><span class="dial-code">+1</span></li><li class="country" data-dial-code="974" data-country-code="qa"><div class="flag"><div class="iti-flag qa"></div></div><span class="country-name">Qatar (&#8235;قطر&#8236;&lrm;)</span><span class="dial-code">+974</span></li><li class="country" data-dial-code="262" data-country-code="re"><div class="flag"><div class="iti-flag re"></div></div><span class="country-name">Réunion (La Réunion)</span><span class="dial-code">+262</span></li><li class="country" data-dial-code="40" data-country-code="ro"><div class="flag"><div class="iti-flag ro"></div></div><span class="country-name">Romania (România)</span><span class="dial-code">+40</span></li><li class="country" data-dial-code="7" data-country-code="ru"><div class="flag"><div class="iti-flag ru"></div></div><span class="country-name">Russia (Россия)</span><span class="dial-code">+7</span></li><li class="country" data-dial-code="250" data-country-code="rw"><div class="flag"><div class="iti-flag rw"></div></div><span class="country-name">Rwanda</span><span class="dial-code">+250</span></li><li class="country" data-dial-code="590" data-country-code="bl"><div class="flag"><div class="iti-flag bl"></div></div><span class="country-name">Saint Barthélemy (Saint-Barthélemy)</span><span class="dial-code">+590</span></li><li class="country" data-dial-code="290" data-country-code="sh"><div class="flag"><div class="iti-flag sh"></div></div><span class="country-name">Saint Helena</span><span class="dial-code">+290</span></li><li class="country" data-dial-code="1869" data-country-code="kn"><div class="flag"><div class="iti-flag kn"></div></div><span class="country-name">Saint Kitts and Nevis</span><span class="dial-code">+1869</span></li><li class="country" data-dial-code="1758" data-country-code="lc"><div class="flag"><div class="iti-flag lc"></div></div><span class="country-name">Saint Lucia</span><span class="dial-code">+1758</span></li><li class="country" data-dial-code="590" data-country-code="mf"><div class="flag"><div class="iti-flag mf"></div></div><span class="country-name">Saint Martin (Saint-Martin (partie française))</span><span class="dial-code">+590</span></li><li class="country" data-dial-code="508" data-country-code="pm"><div class="flag"><div class="iti-flag pm"></div></div><span class="country-name">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</span><span class="dial-code">+508</span></li><li class="country" data-dial-code="1784" data-country-code="vc"><div class="flag"><div class="iti-flag vc"></div></div><span class="country-name">Saint Vincent and the Grenadines</span><span class="dial-code">+1784</span></li><li class="country" data-dial-code="685" data-country-code="ws"><div class="flag"><div class="iti-flag ws"></div></div><span class="country-name">Samoa</span><span class="dial-code">+685</span></li><li class="country" data-dial-code="378" data-country-code="sm"><div class="flag"><div class="iti-flag sm"></div></div><span class="country-name">San Marino</span><span class="dial-code">+378</span></li><li class="country" data-dial-code="239" data-country-code="st"><div class="flag"><div class="iti-flag st"></div></div><span class="country-name">São Tomé and Príncipe (São Tomé e Príncipe)</span><span class="dial-code">+239</span></li><li class="country" data-dial-code="966" data-country-code="sa"><div class="flag"><div class="iti-flag sa"></div></div><span class="country-name">Saudi Arabia (&#8235;المملكة العربية السعودية&#8236;&lrm;)</span><span class="dial-code">+966</span></li><li class="country" data-dial-code="221" data-country-code="sn"><div class="flag"><div class="iti-flag sn"></div></div><span class="country-name">Senegal (Sénégal)</span><span class="dial-code">+221</span></li><li class="country" data-dial-code="381" data-country-code="rs"><div class="flag"><div class="iti-flag rs"></div></div><span class="country-name">Serbia (Србија)</span><span class="dial-code">+381</span></li><li class="country" data-dial-code="248" data-country-code="sc"><div class="flag"><div class="iti-flag sc"></div></div><span class="country-name">Seychelles</span><span class="dial-code">+248</span></li><li class="country" data-dial-code="232" data-country-code="sl"><div class="flag"><div class="iti-flag sl"></div></div><span class="country-name">Sierra Leone</span><span class="dial-code">+232</span></li><li class="country" data-dial-code="65" data-country-code="sg"><div class="flag"><div class="iti-flag sg"></div></div><span class="country-name">Singapore</span><span class="dial-code">+65</span></li><li class="country" data-dial-code="1721" data-country-code="sx"><div class="flag"><div class="iti-flag sx"></div></div><span class="country-name">Sint Maarten</span><span class="dial-code">+1721</span></li><li class="country" data-dial-code="421" data-country-code="sk"><div class="flag"><div class="iti-flag sk"></div></div><span class="country-name">Slovakia (Slovensko)</span><span class="dial-code">+421</span></li><li class="country" data-dial-code="386" data-country-code="si"><div class="flag"><div class="iti-flag si"></div></div><span class="country-name">Slovenia (Slovenija)</span><span class="dial-code">+386</span></li><li class="country" data-dial-code="677" data-country-code="sb"><div class="flag"><div class="iti-flag sb"></div></div><span class="country-name">Solomon Islands</span><span class="dial-code">+677</span></li><li class="country" data-dial-code="252" data-country-code="so"><div class="flag"><div class="iti-flag so"></div></div><span class="country-name">Somalia (Soomaaliya)</span><span class="dial-code">+252</span></li><li class="country" data-dial-code="27" data-country-code="za"><div class="flag"><div class="iti-flag za"></div></div><span class="country-name">South Africa</span><span class="dial-code">+27</span></li><li class="country" data-dial-code="82" data-country-code="kr"><div class="flag"><div class="iti-flag kr"></div></div><span class="country-name">South Korea (대한민국)</span><span class="dial-code">+82</span></li><li class="country" data-dial-code="211" data-country-code="ss"><div class="flag"><div class="iti-flag ss"></div></div><span class="country-name">South Sudan (&#8235;جنوب السودان&#8236;&lrm;)</span><span class="dial-code">+211</span></li><li class="country" data-dial-code="34" data-country-code="es"><div class="flag"><div class="iti-flag es"></div></div><span class="country-name">Spain (España)</span><span class="dial-code">+34</span></li><li class="country" data-dial-code="94" data-country-code="lk"><div class="flag"><div class="iti-flag lk"></div></div><span class="country-name">Sri Lanka (ශ්&zwj;රී ලංකාව)</span><span class="dial-code">+94</span></li><li class="country" data-dial-code="249" data-country-code="sd"><div class="flag"><div class="iti-flag sd"></div></div><span class="country-name">Sudan (&#8235;السودان&#8236;&lrm;)</span><span class="dial-code">+249</span></li><li class="country" data-dial-code="597" data-country-code="sr"><div class="flag"><div class="iti-flag sr"></div></div><span class="country-name">Suriname</span><span class="dial-code">+597</span></li><li class="country" data-dial-code="47" data-country-code="sj"><div class="flag"><div class="iti-flag sj"></div></div><span class="country-name">Svalbard and Jan Mayen</span><span class="dial-code">+47</span></li><li class="country" data-dial-code="268" data-country-code="sz"><div class="flag"><div class="iti-flag sz"></div></div><span class="country-name">Swaziland</span><span class="dial-code">+268</span></li><li class="country" data-dial-code="46" data-country-code="se"><div class="flag"><div class="iti-flag se"></div></div><span class="country-name">Sweden (Sverige)</span><span class="dial-code">+46</span></li><li class="country" data-dial-code="41" data-country-code="ch"><div class="flag"><div class="iti-flag ch"></div></div><span class="country-name">Switzerland (Schweiz)</span><span class="dial-code">+41</span></li><li class="country" data-dial-code="963" data-country-code="sy"><div class="flag"><div class="iti-flag sy"></div></div><span class="country-name">Syria (&#8235;سوريا&#8236;&lrm;)</span><span class="dial-code">+963</span></li><li class="country" data-dial-code="886" data-country-code="tw"><div class="flag"><div class="iti-flag tw"></div></div><span class="country-name">Taiwan (台灣)</span><span class="dial-code">+886</span></li><li class="country" data-dial-code="992" data-country-code="tj"><div class="flag"><div class="iti-flag tj"></div></div><span class="country-name">Tajikistan</span><span class="dial-code">+992</span></li><li class="country" data-dial-code="255" data-country-code="tz"><div class="flag"><div class="iti-flag tz"></div></div><span class="country-name">Tanzania</span><span class="dial-code">+255</span></li><li class="country" data-dial-code="66" data-country-code="th"><div class="flag"><div class="iti-flag th"></div></div><span class="country-name">Thailand (ไทย)</span><span class="dial-code">+66</span></li><li class="country" data-dial-code="670" data-country-code="tl"><div class="flag"><div class="iti-flag tl"></div></div><span class="country-name">Timor-Leste</span><span class="dial-code">+670</span></li><li class="country" data-dial-code="228" data-country-code="tg"><div class="flag"><div class="iti-flag tg"></div></div><span class="country-name">Togo</span><span class="dial-code">+228</span></li><li class="country" data-dial-code="690" data-country-code="tk"><div class="flag"><div class="iti-flag tk"></div></div><span class="country-name">Tokelau</span><span class="dial-code">+690</span></li><li class="country" data-dial-code="676" data-country-code="to"><div class="flag"><div class="iti-flag to"></div></div><span class="country-name">Tonga</span><span class="dial-code">+676</span></li><li class="country" data-dial-code="1868" data-country-code="tt"><div class="flag"><div class="iti-flag tt"></div></div><span class="country-name">Trinidad and Tobago</span><span class="dial-code">+1868</span></li><li class="country" data-dial-code="216" data-country-code="tn"><div class="flag"><div class="iti-flag tn"></div></div><span class="country-name">Tunisia (&#8235;تونس&#8236;&lrm;)</span><span class="dial-code">+216</span></li><li class="country" data-dial-code="90" data-country-code="tr"><div class="flag"><div class="iti-flag tr"></div></div><span class="country-name">Turkey (Türkiye)</span><span class="dial-code">+90</span></li><li class="country" data-dial-code="993" data-country-code="tm"><div class="flag"><div class="iti-flag tm"></div></div><span class="country-name">Turkmenistan</span><span class="dial-code">+993</span></li><li class="country" data-dial-code="1649" data-country-code="tc"><div class="flag"><div class="iti-flag tc"></div></div><span class="country-name">Turks and Caicos Islands</span><span class="dial-code">+1649</span></li><li class="country" data-dial-code="688" data-country-code="tv"><div class="flag"><div class="iti-flag tv"></div></div><span class="country-name">Tuvalu</span><span class="dial-code">+688</span></li><li class="country" data-dial-code="1340" data-country-code="vi"><div class="flag"><div class="iti-flag vi"></div></div><span class="country-name">U.S. Virgin Islands</span><span class="dial-code">+1340</span></li><li class="country" data-dial-code="256" data-country-code="ug"><div class="flag"><div class="iti-flag ug"></div></div><span class="country-name">Uganda</span><span class="dial-code">+256</span></li><li class="country" data-dial-code="380" data-country-code="ua"><div class="flag"><div class="iti-flag ua"></div></div><span class="country-name">Ukraine (Україна)</span><span class="dial-code">+380</span></li><li class="country" data-dial-code="971" data-country-code="ae"><div class="flag"><div class="iti-flag ae"></div></div><span class="country-name">United Arab Emirates (&#8235;الإمارات العربية المتحدة&#8236;&lrm;)</span><span class="dial-code">+971</span></li><li class="country" data-dial-code="44" data-country-code="gb"><div class="flag"><div class="iti-flag gb"></div></div><span class="country-name">United Kingdom</span><span class="dial-code">+44</span></li><li class="country" data-dial-code="1" data-country-code="us"><div class="flag"><div class="iti-flag us"></div></div><span class="country-name">United States</span><span class="dial-code">+1</span></li><li class="country" data-dial-code="598" data-country-code="uy"><div class="flag"><div class="iti-flag uy"></div></div><span class="country-name">Uruguay</span><span class="dial-code">+598</span></li><li class="country" data-dial-code="998" data-country-code="uz"><div class="flag"><div class="iti-flag uz"></div></div><span class="country-name">Uzbekistan (Oʻzbekiston)</span><span class="dial-code">+998</span></li><li class="country" data-dial-code="678" data-country-code="vu"><div class="flag"><div class="iti-flag vu"></div></div><span class="country-name">Vanuatu</span><span class="dial-code">+678</span></li><li class="country" data-dial-code="39" data-country-code="va"><div class="flag"><div class="iti-flag va"></div></div><span class="country-name">Vatican City (Città del Vaticano)</span><span class="dial-code">+39</span></li><li class="country" data-dial-code="58" data-country-code="ve"><div class="flag"><div class="iti-flag ve"></div></div><span class="country-name">Venezuela</span><span class="dial-code">+58</span></li><li class="country" data-dial-code="84" data-country-code="vn"><div class="flag"><div class="iti-flag vn"></div></div><span class="country-name">Vietnam (Việt Nam)</span><span class="dial-code">+84</span></li><li class="country" data-dial-code="681" data-country-code="wf"><div class="flag"><div class="iti-flag wf"></div></div><span class="country-name">Wallis and Futuna</span><span class="dial-code">+681</span></li><li class="country" data-dial-code="212" data-country-code="eh"><div class="flag"><div class="iti-flag eh"></div></div><span class="country-name">Western Sahara (&#8235;الصحراء الغربية&#8236;&lrm;)</span><span class="dial-code">+212</span></li><li class="country" data-dial-code="967" data-country-code="ye"><div class="flag"><div class="iti-flag ye"></div></div><span class="country-name">Yemen (&#8235;اليمن&#8236;&lrm;)</span><span class="dial-code">+967</span></li><li class="country" data-dial-code="260" data-country-code="zm"><div class="flag"><div class="iti-flag zm"></div></div><span class="country-name">Zambia</span><span class="dial-code">+260</span></li><li class="country" data-dial-code="263" data-country-code="zw"><div class="flag"><div class="iti-flag zw"></div></div><span class="country-name">Zimbabwe</span><span class="dial-code">+263</span></li><li class="country" data-dial-code="358" data-country-code="ax"><div class="flag"><div class="iti-flag ax"></div></div><span class="country-name">Åland Islands</span><span class="dial-code">+358</span></li></ul></div><input id="phone" class="form-control black" placeholder="Phone" type="tel" required="" autocomplete="off"></div>
    </div>
    <div class="col-sm-4">
      <input type="text" class="form-control black" placeholder="Mobile" required="">
    </div>
    <div class="col-sm-4">
      <input type="text" class="form-control black" placeholder="Company" required="">
    </div>
  </div>
    </div>
  
  <div class="row paddingBottom">
  <div class="form-inner">
    <div class="col-sm-12">
     <textarea class="form-control txetara" placeholder="Message"></textarea>
      </div>
    <div class="claarfix"></div>
    
    
  </div>
    <input type="submit" class="cntct-sub detil-submit" value="SUBMIT">
    </div>
    
    
  </div>
  
  
  

  <!--Desktop Header-->
  

<div class="products_sec pink-product">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="products_heading detil-heading">
          <h4>latest products</h4>
        </div>
      </div>
    </div>
    
    
    
    
    
   
  
    
    
    
    
  </div>
</div>


<!--PRODUCTS_SECTION-->


<div class="for_product_page">
<div class="products_sec pink-product">

<div class="container-fluid">

<div class="five_prod_column">



<ul>
<li class="product_col_first">
<div class="productsoverly_relative">
          <ul>
          <li>
<img src="images/product1.jpg" alt="Portfolio Spotlight - global investment opportunity portal" title="Portfolio Spotlight - global investment opportunity portal">
<div class="product_content">
<h4>Longside House</h4>
<h6>Product Type (12)</h6>
<span>£50,000</span>
<span>Liverpool, England</span>
<p>Lorem ipsum dolor sit ame a
consetetur sadipscing elitr, sed
diam nonumy eirmod tempor
invidun labore dolore...
<span>Added 04.10.2016</span>
<span>Last edited 12:34 on 04.10.2016</span>
</p>
</div>

</li> 
</ul>
          <div class="products_main_overly">
         
          <img src="images/product_overly.jpg" class="img-responsive" alt="Portfolio Spotlight - global investment opportunity portal" title="Portfolio Spotlight - global investment opportunity portal">
           
          <div class="content_products_sec">
          <div class="padding_div">
          <h4>Grattan House</h4>
          <span class="content_span">Bradford</span>
          <span class="student_content">Student Apartments</span>
          
          <ul>
<li>9% NET Rental Return</li>
<li>3 Year Rental Assurance</li>
<li>7% Interest on Deposit</li>
<li>Completion Q2 2016</li>
<li>Specialist Local Operator</li>
<li>0.32 miles to University of Bradford</li>
<li>0.24 miles to Bradford College</li>
</ul> 
<div class="product_overly_more"><a href="product-detail.html" class="btn btn-warning btn-block">learn more</a></div>          
          </div>
          </div>
          </div>
        
</div>
</li>

<li class="product_col_first">
<div class="productsoverly_relative">
          <ul>
          <li>
<img src="images/product1.jpg" alt="Portfolio Spotlight - global investment opportunity portal" title="Portfolio Spotlight - global investment opportunity portal">
<div class="product_content">
<h4>Longside House</h4>
<h6>Product Type (12)</h6>
<span>£50,000</span>
<span>Liverpool, England</span>
<p>Lorem ipsum dolor sit ame a
consetetur sadipscing elitr, sed
diam nonumy eirmod tempor
invidun labore dolore...
<span>Added 04.10.2016</span>
<span>Last edited 12:34 on 04.10.2016</span>
</p>
</div>

</li> 
</ul>
          <div class="products_main_overly">
         
          <img src="images/product_overly.jpg" class="img-responsive" alt="Portfolio Spotlight - global investment opportunity portal" title="Portfolio Spotlight - global investment opportunity portal">
           
          <div class="content_products_sec">
          <div class="padding_div">
          <h4>Grattan House</h4>
          <span class="content_span">Bradford</span>
          <span class="student_content">Student Apartments</span>
          
         <ul>
<li>9% NET Rental Return</li>
<li>3 Year Rental Assurance</li>
<li>7% Interest on Deposit</li>
<li>Completion Q2 2016</li>
<li>Specialist Local Operator</li>
<li>0.32 miles to University of Bradford</li>
<li>0.24 miles to Bradford College</li>
</ul>
<div class="product_overly_more"><a href="product-detail.html" class="btn btn-warning btn-block">learn more</a></div>          
          </div>
          </div>
          </div>
        
</div>
</li>

<li class="product_col_first">
<div class="productsoverly_relative">
          <ul>
          <li>
<img src="images/product1.jpg" alt="Portfolio Spotlight - global investment opportunity portal" title="Portfolio Spotlight - global investment opportunity portal">
<div class="product_content">
<h4>Longside House</h4>
<h6>Product Type (12)</h6>
<span>£50,000</span>
<span>Liverpool, England</span>
<p>Lorem ipsum dolor sit ame a
consetetur sadipscing elitr, sed
diam nonumy eirmod tempor
invidun labore dolore...
<span>Added 04.10.2016</span>
<span>Last edited 12:34 on 04.10.2016</span>
</p>
</div>

</li> 
</ul>
          <div class="products_main_overly">
         
          <img src="images/product_overly.jpg" class="img-responsive" alt="Portfolio Spotlight - global investment opportunity portal" title="Portfolio Spotlight - global investment opportunity portal">
           
          <div class="content_products_sec">
          <div class="padding_div">
          <h4>Grattan House</h4>
          <span class="content_span">Bradford</span>
          <span class="student_content">Student Apartments</span>
          
        <ul>
<li>9% NET Rental Return</li>
<li>3 Year Rental Assurance</li>
<li>7% Interest on Deposit</li>
<li>Completion Q2 2016</li>
<li>Specialist Local Operator</li>
<li>0.32 miles to University of Bradford</li>
<li>0.24 miles to Bradford College</li>
</ul>
<div class="product_overly_more"><a href="product-detail.html" class="btn btn-warning btn-block">learn more</a></div>          
          </div>
          </div>
          </div>
        
</div>
</li>

<li class="product_col_first">
<div class="productsoverly_relative">
          <ul>
          <li>
<img src="images/product1.jpg" alt="Portfolio Spotlight - global investment opportunity portal" title="Portfolio Spotlight - global investment opportunity portal">
<div class="product_content">
<h4>Longside House</h4>
<h6>Product Type (12)</h6>
<span>£50,000</span>
<span>Liverpool, England</span>
<p>Lorem ipsum dolor sit ame a
consetetur sadipscing elitr, sed
diam nonumy eirmod tempor
invidun labore dolore...
<span>Added 04.10.2016</span>
<span>Last edited 12:34 on 04.10.2016</span>
</p>
</div>

</li> 
</ul>
          <div class="products_main_overly">
         
          <img src="images/product_overly.jpg" class="img-responsive" alt="Portfolio Spotlight - global investment opportunity portal" title="Portfolio Spotlight - global investment opportunity portal">
           
          <div class="content_products_sec">
          <div class="padding_div">
          <h4>Grattan House</h4>
          <span class="content_span">Bradford</span>
          <span class="student_content">Student Apartments</span>
          
         <ul>
<li>9% NET Rental Return</li>
<li>3 Year Rental Assurance</li>
<li>7% Interest on Deposit</li>
<li>Completion Q2 2016</li>
<li>Specialist Local Operator</li>
<li>0.32 miles to University of Bradford</li>
<li>0.24 miles to Bradford College</li>
</ul>
<div class="product_overly_more"><a href="product-detail.html" class="btn btn-warning btn-block">learn more</a></div>          
          </div>
          </div>
          </div>
        
</div>
</li>

<li class="product_col_first">
<div class="productsoverly_relative">
          <ul>
          <li>
<img src="images/product1.jpg" alt="Portfolio Spotlight - global investment opportunity portal" title="Portfolio Spotlight - global investment opportunity portal">
<div class="product_content">
<h4>Longside House</h4>
<h6>Product Type (12)</h6>
<span>£50,000</span>
<span>Liverpool, England</span>
<p>Lorem ipsum dolor sit ame a
consetetur sadipscing elitr, sed
diam nonumy eirmod tempor
invidun labore dolore...
<span>Added 04.10.2016</span>
<span>Last edited 12:34 on 04.10.2016</span>
</p>
</div>

</li> 
</ul>
          <div class="products_main_overly">
         
          <img src="images/product_overly.jpg" class="img-responsive" alt="Portfolio Spotlight - global investment opportunity portal" title="Portfolio Spotlight - global investment opportunity portal">
           
          <div class="content_products_sec">
          <div class="padding_div">
          <h4>Grattan House</h4>
          <span class="content_span">Bradford</span>
          <span class="student_content">Student Apartments</span>
          
         <ul>
<li>9% NET Rental Return</li>
<li>3 Year Rental Assurance</li>
<li>7% Interest on Deposit</li>
<li>Completion Q2 2016</li>
<li>Specialist Local Operator</li>
<li>0.32 miles to University of Bradford</li>
<li>0.24 miles to Bradford College</li>
</ul>
<div class="product_overly_more"><a href="product-detail.html" class="btn btn-warning btn-block">learn more</a></div>          
          </div>
          </div>
          </div>
        
</div>
</li>
</ul>



</div>
</div></div>
  </div>
  
  





<!--PRODUCTS_SECTION-->
 




 
<div class="add_product_sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="add_products_section">
          <h5>Add your product</h5>
          <span></span>
          <p>Lorem ipsum dolor sit amet consete vulputate sadipscing elitr, sed diam nonumy eirmod quisa
            nostrud tempor invidunt labore dolore magna aliquya.</p>
          <div class="add_prod_btn">
            <a href="add-product.html" class="btn btn-default">add product</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>













<div class="social_sec_bottom">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="add_products_lets">
          <h2>Let’s Stay Connected</h2>
          <ul>
            <li><a href="https://www.facebook.com/" target="new"><i class="fa fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/login"  target="new"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/uas/login"  target="new"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://plus.google.com/collections/featured"  target="new"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer_bottom_sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-lg-10 col-xs-12">
        <div class="footer_left_copyright">
          <p>Copyright © Spotlight Portfolio. All Rights Reserved. <span><a href="policy.html">Privacy.</a> <a href="terms.html">Term of Usage.</a> <a href="usage.html">Acceptable Usage.</a></span></p>
        </div>
      </div>
      <div class="col-sm-3 col-lg-2 col-xs-12">
        <div class="footer_right_btn pull-right"><a href="contact.html" class="btn btn-default nop">CONTACT US</a></div>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
  
  
<script src="js/jquery-1.11.3.min.js"></script>
   
  <script src="js/autosearh.js"></script>
  <script>
  $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script>
$('.crou').owlCarousel({
    loop:true,
    nav:true,
  autoplay: 3000,
  items: 1,
  dots : true,
  nav : false,
})    
</script> 

  
   <!-- Load jQuery from CDN so can run demo immediately -->
   
    <script src="js/intlTelInput.js"></script>
    <script>
      $("#phone").intlTelInput({
        //allowExtensions: true,
        //autoFormat: false,
        //autoHideDialCode: false,
        //autoPlaceholder: false,
        //defaultCountry: "auto",
        // geoIpLookup: function(callback) {
        //   $.get('http://ipinfo.io', function() {}, "jsonp").always(function(resp) {
        //     var countryCode = (resp && resp.country) ? resp.country : "";
        //     callback(countryCode);
        //   });
        // },
        //nationalMode: false,
        //numberType: "MOBILE",
        //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        //preferredCountries: ['cn', 'jp'],
        utilsScript: "js/utils.js"
      });
    </script>
 <script type="text/javascript">
    $("body").click(function() {
    $(".curencyOne").hide();
});

$(".curencyOne").click(function(e) {
    e.stopPropagation();
});


  </script>
  
  <script>

    /*******************************
* ACCORDION WITH TOGGLE ICONS
*******************************/
  function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('glyphicon-menu-down glyphicon-menu-up');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
  
  </script>
  
  <script>
$(document).ready(function() {
  //  var my = $(this).text()+""
  $('#mks').text('$ USD');
  $('#language').text('ENGLISH');
  $('#shortGroup').text('Relevence');
  $('#shortGroupp').text('Relevence');
});



$(document).on('click', '.currency_menu li a', function() {
  //  var my = $(this).text()+""
  $('#mks').text($(this).text());
});

$(document).on('click', '.language_menu li a', function() {
  //  var my = $(this).text()+""
  $('#language').text($(this).text());
});

$(document).on('click', '.shortGroup_menu li a', function() {
  //  var my = $(this).text()+""
  $('#shortGroup').text($(this).text());
});

$(document).on('click', '.shortGroup_menuu li a', function() {
  //  var my = $(this).text()+""
  $('#shortGroupp').text($(this).text());
});
 </script>
  
  
  <script>
  
  $(document).ready(function(){
    
  $(".navbar-toggle").click(function(){
    $(".overly").css({"left": "0",});
    $("#bottom-content").hide();
  });
    
    $(".closed-sidebar").click(function(){
      $(".overly").css({"left": "-769px", "transition": "all 0.4s",});
      $("#bottom-content").show();
    })
    
    $("#one").click(function(){
      
      $(".currency").slideToggle();
    });
    
    $("#two").click(function(){
      
      $(".language").slideToggle();
    });
  
  });
    
    $(document).on('click','.box .currency li',function(){
    $("#one").text($(this).text());
      $(".currency").hide();
  });
    
    $(document).on('click','.box .language li',function(){
    $("#two").text($(this).text());
      $(".language").hide();
  });
    
    $(document).on('click','#curency_btn',function(){
      
      $(".c_asd").toggle();
      $(".l_asd").hide(); 
     });
    $(document).on('click','#language_btn',function(){
      
      $(".l_asd").toggle();
      $(".c_asd").hide(); 
     });
     
    
    $(".l_asd").on('click','li',function (){
        var s_text = $(this).text();
      $(".l_asd").slideUp();
      $('#language').text(s_text);
      });
    
    $(".c_asd").on('click','li',function (){
        var s_text = $(this).text();
      $(".c_asd").slideUp();
      $('#mks').text(s_text);
      });
     
    
    $(document).on('click','.c',function(){
      $('#myModal').modal('show');
      var mySrc = $(this).prev('.w').find('img').attr('src');
      //alert(mySrc);
       
    var res = mySrc.substr(0, 7);
   
  var res2 = mySrc.substr(13, 6);
      var imgNewValue = res+""+res2;
      $("#replaceImg").attr('src',imgNewValue);
      //alert("working");
    });


</script>

 <script type="text/javascript">
    $("body").click(function() {
    $(".curencyOne").hide();
});

$(".curencyOne").click(function(e) {
    e.stopPropagation();
});


$(document).click(function(e) { 
  
    if(e.target.id != 'two') {
        $(".language").hide();   
    } 
});
   
   $(document).click(function(e) { 
  
    if(e.target.id != 'one') {
        $(".currency").hide();   
    } 
});

  </script>
@endsection