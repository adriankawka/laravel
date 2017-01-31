(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85604899-1', 'auto');
  ga('send', 'pageview');
$('.crou').owlCarousel({
    loop:true,
    nav:true,
  autoplay: 3000,
  items: 1,
  dots : true,
  nav : false,
})    
 $(document).ready(function() {
  //  var my = $(this).text()+""
    $('#mks').text('$ USD');
    $('#language').text('ENGLISH');
    $('#shortGroup').text('Relevence');
    $('#shortGroupp').text('Relevence');
  
  $("#completion_date").datepicker({
    showOn: "both", 
      buttonText: "<i class='fa fa-calendar'></i>"
    
    });
  $("#launch_date").datepicker({
   showOn: "both", 
      buttonText: "<i class='fa fa-calendar'></i>"
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
    $(".check_list_product").click(function(){
      $(".country-type").hide();
      $(".price-range").hide();
      $('.product-type').slideToggle();
      
    });
    
    $(".check_list_country").click(function(){
      $(".product-type").hide();
      $(".price-range").hide();
      $('.country-type').slideToggle();
      
    });
    
    $(".check_list_price").click(function(){
      $(".product-type").hide();
      $(".country-type").hide();
      $('.price-range').slideToggle();
      
    });
      
    $(".product-type li").click(function(){
      $("#product-single").val($(this).text());
      $(".product-type").hide();
      });
    $(".country-type li").click(function(){
      $("#country-single").val($(this).text());
      $(".country-type").hide();
      });
    $(".price-range li").click(function(){
      $("#price-single").val($(this).text());
      $(".price-range").hide();
      });
    $(document).on('click', '.shortGroup_menu li a', function() {
  //  var my = $(this).text()+""
  $('#shortGroup').text($(this).text());
});

$(document).on('click', '.shortGroup_menuu li a', function() {
  //  var my = $(this).text()+""
  $('#shortGroupp').text($(this).text());
});
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
      
      $(".language").toggle();
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
   $(document).ready(function(){
    $('.dataTables-example').DataTable({
        pageLength: 25,
        responsive: true,
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
            { extend: 'copy'},
            {extend: 'csv'},
            {extend: 'excel', title: 'ExampleFile'},
            {extend: 'pdf', title: 'ExampleFile'},

            {extend: 'print',
             customize: function (win){
              $(win.document.body).addClass('white-bg');
              $(win.document.body).css('font-size', '10px');

              $(win.document.body).find('table')
                  .addClass('compact')
                  .css('font-size', 'inherit');
                }
            }
        ]

    });

        });
    $("#add").click(function(){
        $('#exampleModal').modal('show');
    });
    var del_id ='';
     $('.del_product').click(function(){
        $('#delModal').modal('show');
        
        del_id = $(this).attr('value');
       
      });
     $('.btn-del').click(function(){
      $.ajax({
         type:'GET',
         url:'/delete',
         data: { 'id':del_id },
         success:function(data){
           window.location = '/admin';
         }
      });
      $('#delModal').modal('hide');
    });
     var featured_id ='';
     $('.featured_product').click(function(){
        $('#feaModal').modal('show');
        
        featured_id = $(this).attr('value');
      });
     $('.btn-featured').click(function(){
      $.ajax({
         type:'GET',
         url:'/remove/',
         data: { 'id':featured_id },
         success:function(data){
           window.location = '/featured';
         }
      });
      $('#feaModal').modal('hide');
    });
     var call_id ='';
     $('.call_product').click(function(){
        $('#callModal').modal('show');
        call_id = $(this).attr('value');
      $.ajax({
         type:'GET',
         url:'/calledit/',
         data: { 'id':call_id },
         success:function(data){
           // alert(data.products.title);
          $('#call_title').val(data.products.title);
          $('#call_description').val(data.products.description);
          $('#call_id').val(data.products.id);
         }
      });
       $('.btn-call').click(function(e){
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault(); 
        var formData = {
            title: $('#call_title').val(),
            description: $('#call_description').val(),
        }
      var call_id = $('#call_id').val();
           $.ajax({
           type:'POST',
           url:'/call/' + call_id,
           data:formData,
           success:function(){
               window.location = '/call';
         }
      });
         $('#callModal').modal('hide');  
    });
    });
  var scroller_id ='';
     $('.scroller_product').click(function(){
        $('#scrollerModal').modal('show');
        scroller_id = $(this).attr('value');
      $.ajax({
         type:'GET',
         url:'/scrolleredit/',
         data: { 'id':scroller_id },
         success:function(data){
           // alert(data.products.title);
          $('#scroller_title').val(data.banner.title);
          $('#scroller_text').val(data.banner.smalltext);
          $('#scroller_id').val(data.banner.id);
         }
      });
       $('.btn-scroller').click(function(e){
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault(); 
        var formData = {
            title: $('#scroller_title').val(),
            smalltext: $('#scroller_text').val(),
        }
      var scroller_id = $('#scroller_id').val();
           $.ajax({
           type:'POST',
           url:'/scroller/' + scroller_id,
           data:formData,
           success:function(){
               window.location = '/scroller';
         }
      });
         $('#scrollerModal').modal('hide');  
    });
});
var del_log ='';
   $('.del_log').click(function(){
      $('#del_log').modal('show');
      
      del_log = $(this).attr('value');
     
    });
   $('.btn-log').click(function(){
    $.ajax({
       type:'GET',
       url:'/dellog',
       data: { 'id':del_log },
       success:function(data){
         window.location = '/stat';
       }
    });
    $('#delModal').modal('hide');
  });   
 $(document).ready(function() {
  $("#completion_date").datepicker({
    showOn: "both", 
      buttonText: "<i class='fa fa-calendar'></i>"
    
    });
  $("#launch_date").datepicker({
   showOn: "both", 
      buttonText: "<i class='fa fa-calendar'></i>"
    });
  });
    $(".check_list_product").click(function(){
      $(".country-type").hide();
      $(".price-range").hide();
      $('.product-type').slideToggle();
      
    });
    // $(".check_list_price").click(function(){
    //   $(".product-type").hide();
    //   $(".country-type").hide();
    //   $('.price-range').slideToggle();
      
    // });
      
    $(".product-type li").click(function(){
      $("#product-single").val($(this).text());
      $(".product-type").hide();
      });
  
    $(".price-range li").click(function(){
      $("#price-single").val($(this).text());
      $(".price-range").hide();
      });
      var check ='';
    $('.featured').click(function(){

      prod_id = $(this).attr('data-product-id');
      if($(this).is(':checked')){
        $.ajax({
         type:'GET',
         url:'/trueft',
         data: { 'id': prod_id },
         success:function(data){
         }
      });
   }
   else {
     $.ajax({
         type:'GET',
         url:'/falseft',
         data: { 'id': prod_id },
         success:function(data){
         }
      });
    }
   }); 

  $(document).ready(function(){
      $('.summernote').summernote();
 });
  $('.edit-form').submit(function(event) {
    event.preventDefault();
    event.stopPropagation();
    var makeupStr = $('.summernote').summernote('code');
    var formData = new FormData($(this));
    formData.append('makeupStr', makeupStr);

    $.ajax({
      type: 'POST',
      url: '/about/edit',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data){
          // alert(data);
      }
    })

  });
     // jQuery(document).ready(function ($) {

     //        var jssor_1_SlideshowTransitions = [
     //          {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
     //          {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
     //        ];

     //        var jssor_1_options = {
     //          $AutoPlay: true,
     //          $SlideshowOptions: {
     //            $Class: $JssorSlideshowRunner$,
     //            $Transitions: jssor_1_SlideshowTransitions,
     //            $TransitionsOrder: 1
     //          },
     //          $ArrowNavigatorOptions: {
     //            $Class: $JssorArrowNavigator$
     //          },
     //          $ThumbnailNavigatorOptions: {
     //            $Class: $JssorThumbnailNavigator$,
     //            $Cols: 10,
     //            $SpacingX: 8,
     //            $SpacingY: 8,
     //            $Align: 360
     //          }
     //        };

     //        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

     //        /*responsive code begin*/
     //        /*you can remove responsive code if you don't want the slider scales while window resizing*/
     //        function ScaleSlider() {
     //            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
     //            if (refSize) {
     //                refSize = Math.min(refSize, 800);
     //                jssor_1_slider.$ScaleWidth(refSize);
     //            }
     //            else {
     //                window.setTimeout(ScaleSlider, 30);
     //            }
     //        }
     //        ScaleSlider();
     //        $(window).bind("load", ScaleSlider);
     //        $(window).bind("resize", ScaleSlider);
     //        $(window).bind("orientationchange", ScaleSlider);
     //        /*responsive code end*/
     //    });
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
    function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('glyphicon-menu-down glyphicon-menu-up');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
      $("body").click(function() {
    $(".curencyOne").hide();
});

$(".curencyOne").click(function(e) {
    e.stopPropagation();
});
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