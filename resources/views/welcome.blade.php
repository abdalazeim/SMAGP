<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/noscript.css" />
        <link rel="stylesheet" href="css/main-1.css" />


        <title></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #ffffff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: ;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">صفحة النظام الرئيسية</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
	<!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <a href="index.html" class="logo"><strong>SMAGP</strong> <span>Website</span></a>
            <nav>
                <a href="#menu">Sign Up</a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <ul class="links">
                <li class="active"> <a href="index.html">Sign In </a> </li>

                <li> <a href="blog.html">Regester</a> </li>

                <li> <a href="about-us.html">About Us</a> </li>

            </ul>
        </nav>

        <!-- Banner -->
            <section id="banner" class="major">
                <div class="inner">
                    <header class="major">
                        <h1>نظام إدارة وأرشفة مشاريع التخرج</h1>
                    </header>
                    <div class="content">
                        <p>كلية علوم الحاسوب وتقانة المعلومات</p>
                        <ul class="actions">
                            <li><a href="https://fcsit.oiu.edu.sd/" class="button next scrolly">موقع الكلية</a></li>
                        </ul>
                        <ul class="actions">
                            <li><a href="https://fcsit.oiu.edu.sd/" class="button next scrolly">إرشيف المشاريع</a></li>
                        </ul>
                    </div>
                </div>
            </section>

        <!-- Main -->
            <div id="main">
                    <!-- About us -->
                    <section>
                        <div class="inner">
                            <header class="major">
                                <h2>عن النظام</h2>
                            </header>
                            <p>تواجه معظم الجامعات السودانية صعوبة في إدارة مشاريع التخرج لطلاب البكلاريوس، حيث يتم إدارتها بطريقة يدوية مما يؤدي إلى ضياع الوقت والجهد والمعلومات بالإضافة إلى ذلك يحدث تضارب عند إختيار الطلاب للمشاريع . ولذلك فكرة عمل مشروع نظام إدارة وأرشفة مشاريع التخرج ستكون خير معين للطلاب والمشرفين , حيث ستوفر الوقت للطلاب من حيث امكانية الرجوع للمشاريع القديمة وسهولة الوصول إليها , وعدم التضارب في إختيار المشاريع وسهولة إدارة المشرفين للمشاريع ومتابعتها.	
                            </p>
                            
                        </div>
                    </section>

                    <!-- Blog Posts -->
                    <section class="tiles">
                        <article>
                            <span class="image">
                                <img src="images/blog-1-720x480.jpg" alt="" />
                            </span>
                            <header class="major">
                                <h3>قسم تقانة المعلومات</h3>

                                <p><br> 
                                    تخصص تقانة المعلومات يركز بشكل أكبر على التقانة نفسها لا علي المعلومات التي تنقلها. وهو تخصص جديد وسريع التطور فالمهنيون فيه يطورون ويصنفون ويستبدلون النظم بما يناسب المؤسسة.</p>

                                
                            </header>
                        </article>
                        <article>
                            <span class="image">
                                <img src="images/blog-5-720x480.jpg" alt="" />
                            </span>
                            <header class="major">
                                <h3>قسم علوم الحاسوب</h3>

                                <p><br> 
                                     تم تأسيس قسم علوم الحاسوب بجامعة أم درمان الإسلامية في العام 1991م تحت مظلة كلية العلوم والعلوم الطبية الأساسية في ذلك الوقت كأحد أقدم أقسام علوم الحاسوب بالجامعات السودانية
                                </p>

                            
                            </header>
                        </article>
                        <article>
                            <span class="image">
                                <img src="images/blog-3-720x480.jpg" alt="" />
                            </span>
                            <header class="major">
                                <h3>قسم نظم المعلومات</h3>

                                <p><br> يعتبر قسم نظم المعلومات من أهم وأعرق الأقسام الأكاديمية في جامعة ام درمان الأسلامية ، واحد الأقسام الثلاثة لكلية علوم الحاسب وتقانة المعلومات</p>

                            
                            </header>
                        </article>

                        
                    </section>

                    
            </div>

        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <ul class="icons">
                
                    <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                
                </ul>
                <ul class="copyright">
                    <li>Copyright © 2020 </li>
                    
                </ul>
            </div>
        </footer>

    </div>

<!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>


		<!-- Three -->
			<section id="three" class="wrapper align-center">
				<div class="inner">
					<div class="flex flex-2">
						<article>





					</div>

				</div>
                </div>
            </div>
        </div>
    </body>
</html>
