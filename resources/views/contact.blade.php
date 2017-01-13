@extends('app')
@include('partials.header')
@section('template_title')
  Login
@endsection
@section('content')
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
				<li><a href="/">HOME</a></li>
				<li><a href="/products">PRODUCTS</a></li>
				<li><a href="/aboutus">ABOUT US</a></li>
				<li><a href="/contact">CONTACT</a></li>
				<li><a href="/add-product">ADD YOUR PRODUCT</a></li>
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
	
	

<div class="header_section visible-mobile" id="show">
 
  <div class="products_banner"> <img src="images/contact.jpg" class="img-responsive" alt="Portfolio Spotlight - global investment opportunity portal"> </div>
  <div class="logo_menu">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-xs-4 top_logo">
          <div class="logo"><a href="/"><img src="images/logo.png" alt="Portfolio Spotlight - global investment opportunity portal" title="Portfolio Spotlight - global investment opportunity portal"></a></div>
        </div>
        <div class="col-sm-9 col-xs-8">
          <div class="col-lg-12 col-xs-12">
            <div class="curency_section">
              
                <ul>
                  <li>
                    <div class="dropdown">
                      <label ><span class="color_curancy">Currency : </span></label>
                       <button style="width: 74px;height: 34px;" class="btn btn-primary" id="curency_btn" type="button"><span id="mks"></span> <span class="caret"></span></button> 
                      <ul class="curencyOne c_asd">
                        <li>$ USD</li>
                        <li>$ EUR</li>
                        <li>$ GBP</li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <div class="dropdown ">
                      <label ><span class="color_curancy">Language : </span></label>
                       <button style="width: 74px;height: 34px;" class="btn btn-primary" type="button" data-toggle="dropdown" id="language_btn"><span id="language"></span> <span class="caret"></span></button>
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
          <div class="banner_find_heading ">
            <h1>CONTACT US<span></span> </h1>
            <p>Lorem ipsum dolor sit ame consetetur sadipscing elitr sed diam nonumy</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  
</div>
	
	
<div class="looking_search_sec display_none_sec product_page_looking">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="looking_search_sec_in">
          <div class="looking_for_in looking_sec_style">
            <input type="text" placeholder="I’m looking for...">
          </div>
          <div class="sort_by_in">
            <form class="form-inline">
              <div class="form-group">
                <div class="dropdown">
                  <label ><span class="color_curancy">Sort by : </span></label>
                  <button class="btn btn-primary" type="button" data-toggle="dropdown"><span id="shortGroupp"></span> <span class="caret"></span></button>
                  <ul class="dropdown-menu shortGroup_menuu">
                    <li><a href="#">Relevance</a></li>
                    <li><a href="#">Product type</a></li>
                    <li><a href="#">Date</a></li>
                    <li><a href="#">Date</a></li>
                    <li><a href="#">Location</a></li>
                  </ul>
                </div>
               
                    <a href="products.html"><span class="glyphicon glyphicon-search search_icon homeicon"></span></a>
                  <!--<span class="glyphicon glyphicon-search search_icon"></span>-->

                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 

<div class="container">
	<h2 class="title-tag">GET IN TOUCH WITH US</h2>
	
	<div class="row paddingBottom no-padding-spot">
    	<div class="form-inner">
    		<div class="col-sm-4">
    			<input type="text" class="form-control black" placeholder="First Name" required>
    		</div>
    		<div class="col-sm-4">
    			<input type="text" class="form-control black" placeholder="Last Name" required>
    		</div>
    		<div class="col-sm-4">
    			<input type="text" class="form-control black" placeholder="Email" required>
    		</div>
    	</div>
		</div>
	
	<div class="row paddingBottom no-padding-spot">
    	<div class="form-inner">
      		<div class="col-sm-4">
      			<input id="phone" class="form-control black" placeholder="Phone" type="tel" required>
      		</div>
      		<div class="col-sm-4">
      			<input type="text" class="form-control black" placeholder="Mobile" required>
      		</div>
      		<div class="col-sm-4">
      			<input type="text" class="form-control black" placeholder="Company" required>
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
  	<input type="submit" class="cntct-sub" value="SUBMIT">
	</div>
</div>
<div class="social_sec_bottom contact-bottom">
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
@endsection