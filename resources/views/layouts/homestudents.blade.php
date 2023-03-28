
@extends('layouts.students')

@section('we')


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body>

<div id="header">
    <div id="logo">
        <h1><a href="{{ route('wepstudents.index') }}">رجوع  </a></h1>
    </div>
    <!-- end #logo -->
    <div id="menu">
        <ul>
            <li class="first"><a href="#">المساعدة  </a></li>
                       <li class="first"><a href="{{ route('wepstudents.index') }}"> الصفحة الرئيسة   </a></li>

        </ul>
    </div>
    <!-- end #menu -->
</div>
<!-- end #header -->
<div id="page">
    
        
                
                 @yield('students')

  @yield('content')
            
               
            </div>
        </div>
    </div>
    <!-- end #content -->
    
    <!-- end #sidebar -->
    <div style="clear: both;"> </div>
</div>
<!-- end #page -->

<!-- end #footer -->
</body>
</html>
@endsection
