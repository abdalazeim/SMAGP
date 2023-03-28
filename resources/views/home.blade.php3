 @extends('layouts.app')

@section('content')
<head>
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
      <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
      <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
      <!--script src="js/less-1.3.3.min.js"></script-->
      <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

      <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <![endif]-->
      <!-- Fav and touch icons -->


   </head>
   <body>
   
   
   
   
   
   
   
   
   

                         <div class="col-md-4 column lang">
                        <a href="#">AR</a>
                         <a href="#">EN</a>
              <a href="#">تسجيل</a>
                            <a href="#">دخول</a>

                  

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
                     <div class="drop-list"><a href="">اعداد المستخمين </a></div>
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
                        <a href="">المساعدة </a>
                     </li>


		                 <li>
                        <a href="">حول النظام</a>
                        <div id="drop-list">
                   <div class="drop-list"><a href="">المبرمجين </a></div>
                   <div class="drop-list"><a href="">//// </a></div>
                     </li>

                  </ul>
				  
            </div>
			
			
			<div>
			</div>
<div class="center">
            <div class="r_center">
            <div class="bolck_head"> القائمة الرئيسية</div>
            <div class="bolck_body">
            <div class="menu">
            <ul>
			</div>

    <div class="center">
    <div class="r_center">
	    <div class="bolck_head">  قسم الادارة</div>

    <div class="bolck_body">
    <div class="menu">
    <ul>

    <li><a href="{{ route('projects.index') }}">ادراة
    المشاريع
    </a></li>
    <li> <a href="{{ route('sups.index') }}">ادراة المشرفين</a> </li>
    <li><a href="{{ route('students.index') }}">ادراة الطالب</a></li>

    <li> <a href="#">ادراة المنسقين</a>
      <li> <a href="{{ route('sources.index') }}"> ادراة المصادر</a> </li>
      <li> <a href="#">  ادارة اللقاءات</a> </li>
      <li> <a href="#">   ادارة المهام</a> </li>

     </li>
    <li> <a href="#">ادراة المناقشين </a> </li>
		    <div class="bolck_head">قسم المشاريع</div>

    <li> <a href="{{ route('pprojecs.index') }}"> افضل المشاريع</a> </li>
    <li> <a href="#"> المشاريع السابقة</a> </li>
    <li> <a href="{{ route('products.index') }}">المشاريع المخترحه </a> </li>
    <li> <a href="#">خطة البحث</a> </li>
			        <li> <a href="#">التقويم </a> </li>

		    <div class="bolck_head">منتدى النقاش </div>

    <li> <a href="{{ route('download.index') }">  خطة البحث </a> </li>
    <li> <a href="#">ارسل رسالة الى مشرف </a> </li>
    <li> <a href="#">كيفة هيكلة المشروع </a> </li>
    <li> <a href="#"> المساعدة</a> </li>
    <li> <a href="#"> انشاء بوست</a> </li>

	
	
    </ul>

	
	
	
	
    </div>
    </div>
    </div>
    <div class="c_center">

    @yield('home')

    @yield('content')
	<br>
	</br>

                    </div>
                </div>
            </div>


                            </div>
                        </div>
                    </div>
    </div>
	
	
	

    <div class="clear"> </div>

    <div class="footer">

    <div class="do_footer">جميع الحقوق محفوظة نظام إدراة وأرشفة مشاريع التخريج

    </div>
    </div>
	</div>
       <div class="center">

       <div class="row">
            <div class="col-md-4 box3-container">

           
      </div>
	  
	  
	  
	  
	  
	  
    </div>

	
                  
                    


    </div>
    </div>
    </div>
    </div>
    </div>








   </body>


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
@endsection
