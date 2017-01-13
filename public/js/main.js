(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85604899-1', 'auto');
  ga('send', 'pageview');
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

