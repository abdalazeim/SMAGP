
@extends('layouts.app')

@section('content')
 

<html>

<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
        <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/slider-style.css" rel="stylesheet">
      <link rel="stylesheet" href="css/styles.css" />
      <link rel="stylesheet" href="style/style.css">
      <title>smagp</title>
    <link href="css/bootstrap.min.css" rel="abd">
      <link href="css/style.css" rel="abd">
      <link href="css/slider-style.css" rel="abd">
      <link rel="stylesheet" href="css/abd.css" />
      <link rel="stylesheet" href="style/abd.css">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style>

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body> 

        
        <nav class="navbar3 navbar-expand navbar-dark bg-primary"> <a href="#menu-toggle" id="menu-toggle" class="navbar-brand"><span class="navbar-toggler-icon"></span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            
   
   

                  

                        </marquee>

                  


                        </div>
              </div>


     </div>




 <div id="slideshow">
   <a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
 <a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>
 <a class="commands prev commands1" href="#sl_i4" title="Go to last slide">&lt;</a>
 <a class="commands next commands1" href="#sl_i2" title="Go to 2nd slide">&gt;</a>
 <a class="commands prev commands2" href="#sl_i1" title="Go to 1rst slide">&lt;</a>
 <a class="commands next commands2" href="#sl_i3" title="Go to 3rd slide">&gt;</a>
 <a class="commands prev commands3" href="#sl_i2" title="Go to 2nd slide">&lt;</a>
 <a class="commands next commands3" href="#sl_i4" title="Go to 4th slide">&gt;</a>
 <a class="commands prev commands4" href="#sl_i3" title="Go to 3rd slide">&lt;</a>
 <a class="commands next commands4" href="#sl_i1" title="Go to first slide">&gt;</a>







     <ul class="dots_commands"><!--
       --><li><a title="Show slide 1" href="#sl_i1">Slide 1</a></li><!--
       --><li><a title="Show slide 2" href="#sl_i2">Slide 2</a></li><!--
       --><li><a title="Show slide 3" href="#sl_i3">Slide 3</a></li><!--
       --><li><a title="Show slide 4" href="#sl_i4">Slide 4</a></li>
     </ul>
   
   
   
   
   
   
   
   
   
   


                 <div class="row clearfix" id="bar">
                          <div id="drop">
                          
              القائمة
            </div>
                  <ul class="nav nav-tabs">
                     <li >
                        <a href="index.html">الرئيسية</a>
                     </li>
                     <li>
                        <a href="about.html">اعداد النظام</a>
                     </li>
<li>
                        <a href="#">الادوات</a>
                          <div id="drop-list">
                     <div class="drop-list"><a href="set.php">اعداد المستخمين </a></div>
                     <div class="drop-list"><a href="">اعداد قاعة البيانات </a></div>
                     <div class="drop-list"><a href="">اعداد اقسام النظام </a></div>
                     <div class="drop-list"><a href="">//// </a></div>
                     <div class="drop-list"><a href="">////</a></div>
                     </div><!--drop-list-->
                     </li>
                     
                      <li>
                        <a href="">النشاط </a>
                         <div id="drop-list">
                     <div class="drop-list"><a href="">رسال اتصل بنا  </a></div>
                     <div class="drop-list"><a href="">صندوق الوارد   </a></div>
                     <div class="drop-list"><a href="">اعداد اقسام النظام </a></div>
                     <div class="drop-list"><a href="">//// </a></div>
                     <div class="drop-list"><a href="">////</a></div>
                     </div><!--drop-list-->
                     </li>
                     </li>


                   


                         <li>
                        <a href="">حول النظام</a>
                        <div id="drop-list">
                   <div class="drop-list"><a href="">المبرمجين </a></div>
                   <div class="drop-list"><a href="">//// </a></div>

                     </li>
                    

                  </ul>

        
            
        
<div id="wrapper" class="toggled">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
            
                <ul class="sidebar-nav">






        
                    <li class="sidebar-brand"> <a href="#">قوائم النظام</a> </li>

                    <li>
                        <button class="dropdown-btn text-right">أقسام الادارة
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                                <a href="{{ route('sups.index') }}">ادراة المشرفين </a>
                                <a href="{{ route('students.index') }}"> ادراة الطالب</a> 
                                <a href="{{ route('sources.index') }}">ادراة المصاد</a>
                                <a> <a href="#">  ادارة اللقاءات</a>
                                 <a> <a href="#">   ادارة المهام</a>
                                          <a href="#">ادراة المناقشين </a>

                        </div>
                     </li>

                     <li>
                        <button class="dropdown-btn text-right">قسم المشاريع
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                                <a href="">افضل المشاريع</a>
                                <a href="#">المشاريع السابقة</a> 
                                <a href="#">المشاريع المخترحه</a>
                                <a href="#">خطة البحث</a> 
                    <a href="#">التقويم </a>
                        </div>
                     </li>

                     <li>
                        <button class="dropdown-btn text-right">منتدى النقاش
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
     <a href="#">كيفة كتابة الخطه </a>
     <a href="#">ارسل رسالة الى مشرف </a>
    <a href="#">كيفة هيكلة المشروع </a>
    <a href="#"> المساعدة</a>
    <a href="#"> انشاء بوست</a>
                        </div>
                    
        
                </ul>
            </div> <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            
            

            <div id="page-content-wrapper">
                <div class="container-fluid">
                   


                    @yield('home')

  @yield('content')
            </div> <!-- /#page-content-wrapper -->
        </div> <!-- /#wrapper -->
        <!-- Bootstrap core JavaScript -->
        
        
</script>
 <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/scripts.js"></script>
      <script type="text/javascript" src="js/slider-js.js"></script>
       <script type="text/javascript">
$('.pgwMenu').pgwMenu();
$('a[data-goto]').click(function() { pgwjs.goTo($(this).attr('data-goto')); });
var pgwSlider=$('.pgwSlider').pgwSlider();function reloadSlider(){var newConfig={};var listPosition=$('input[name=\"listPosition\"]:checked').val();if(listPosition=='none'){newConfig.displayList=false;}else{newConfig.listPosition=listPosition;}newConfig.selectionMode=$('input[name=\"selectionMode\"]:checked').val();newConfig.transitionEffect=$('input[name=\"transitionEffect\"]:checked').val();if($('#displayControls:checked').val()=='true'){newConfig.displayControls=true;}if($('#verticalCentering:checked').val()=='true'){newConfig.verticalCentering=true;}if($('#adaptiveHeight:checked').val()=='true'){newConfig.adaptiveHeight=true;}if($('#maxHeight:checked').val()=='true'){newConfig.maxHeight=300;}pgwSlider.reload(newConfig);}$('.sliderConfig input').bind('change',function(){reloadSlider()});(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create','UA-59412371-1','auto');ga('send','pageview');
</script>
<script>
$(function(){
    $('.says-loop:gt(0)').hide();
    setInterval(function(){
      $('.says-loop:first-child').fadeOut()
         .next().fadeIn()
         .end().appendTo('.says');},
      3000);
});
</script>
        
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->
        <script>
          $(function(){
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            $(window).resize(function(e) {
              if($(window).width()<=768){
                $("#wrapper").removeClass("toggled");
              }else{
                $("#wrapper").addClass("toggled");
              }
            });
          });

        //   dropdwon
        //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
            } else {
            dropdownContent.style.display = "block";
            }
            
        
            
        });
        }
           
           
        </script>
   
  </html>
  @endsection