<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Shoes Nerves Shop - Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="{{url('public')}}/admin/image/x-icon" href="{{url('public')}}/admin/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/admin/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/admin/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/admin/css/owl.carousel.css">
    <link rel="stylesheet" href="{{url('public')}}/admin/css/owl.theme.css">
    <link rel="stylesheet" href="{{url('public')}}/admin/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/admin/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/admin/css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/admin/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/admin/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/admin/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/admin/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="{{url('public')}}/admin/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/admin/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="{{url('public')}}/admin/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/admin/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/admin/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('public')}}/admin/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{url('public')}}/admin/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="{{url('Home')}}" class="btn btn-primary">Back to Dashboard</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3>PLEASE LOGIN TO APP</h3>
                    <p>This is the best app ever!</p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="{{route('login-admin')}}" method="post">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" title="Please enter you username" required="" value="{{old('username')}}" name="username" id="username" class="form-control">
                                <span class="text-danger">@error('username'){{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password"  required="" value="" name="password" id="password" class="form-control">
                                <span class="text-danger">@error('password'){{$message}} @enderror</span>
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
										        <input type="checkbox" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div>
                            <button type="submit" class="btn btn-success btn-block loginbtn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>

    </div>

    <!-- jquery
		============================================ -->
    <script src="{{url('public')}}/admin/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{url('public')}}/admin/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{url('public')}}/admin/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{url('public')}}/admin/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{url('public')}}/admin/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{url('public')}}/admin/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{url('public')}}/admin/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{url('public')}}/admin/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{url('public')}}/admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{url('public')}}/admin/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{url('public')}}/admin/js/metisMenu/metisMenu.min.js"></script>
    <script src="{{url('public')}}/admin/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{url('public')}}/admin/js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{url('public')}}/admin/js/icheck/icheck.min.js"></script>
    <script src="{{url('public')}}/admin/js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{url('public')}}/admin/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="{{url('public')}}/admin/js/main.js"></script>
</body>

</html>
