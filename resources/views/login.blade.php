<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets') }}/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Paper Dashboard PRO by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('assets') }}/css/paper-dashboard.css" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('assets') }}/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets') }}/css/themify-icons.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" data-color=""
            data-image="{{ asset('assets') }}/img/background/background-2.jpg">
            <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <form action="{{ route('login-process') }}" method="post">
                                @csrf
                                <div class="card" data-background="color" data-color="blue">
                                    <div class="card-header">
                                        <h3 class="card-title">Đăng nhập</h3>
                                    </div>
                                    <div class="card-content">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" placeholder="Nhập email" @if (Session::exists('error')) value="{{ Session::get('error.email') }}" @endif class=" form-control input-no-border">
                                        </div>
                                        <div class="form-group">
                                            <label>Mật khẩu</label>
                                            <input type="password" name="password" placeholder="Nhập mật khẩu"
                                                class="form-control input-no-border">
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        @if (Session::exists('error'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('error.message') }}
                                            </div>
                                        @endif
                                        <button type="submit" class="btn btn-fill btn-wd ">Zôoooo</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!--   Core JS Files. Extra: TouchPunch for touch library inside jquery-ui.min.js   -->
<script src="{{ asset('assets') }}/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/perfect-scrollbar.min.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Forms Validations Plugin -->
<script src="{{ asset('assets') }}/js/jquery.validate.min.js"></script>

<!-- Promise Library for SweetAlert2 working on IE -->
<script src="{{ asset('assets') }}/js/es6-promise-auto.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('assets') }}/js/moment.min.js"></script>

<!--  Date Time Picker Plugin is included in this js file -->
<script src="{{ asset('assets') }}/js/bootstrap-datetimepicker.js"></script>

<!--  Select Picker Plugin -->
<script src="{{ asset('assets') }}/js/bootstrap-selectpicker.js"></script>

<!--  Switch and Tags Input Plugins -->
<script src="{{ asset('assets') }}/js/bootstrap-switch-tags.js"></script>

<!-- Circle Percentage-chart -->
<script src="{{ asset('assets') }}/js/jquery.easypiechart.min.js"></script>

<!--  Charts Plugin -->
<script src="{{ asset('assets') }}/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('assets') }}/js/bootstrap-notify.js"></script>

<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('assets') }}/js/sweetalert2.js"></script>

<!-- Vector Map plugin -->
<script src="{{ asset('assets') }}/js/jquery-jvectormap.js"></script>

<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Wizard Plugin    -->
<script src="{{ asset('assets') }}/js/jquery.bootstrap.wizard.min.js"></script>

<!--  Bootstrap Table Plugin    -->
<script src="{{ asset('assets') }}/js/bootstrap-table.js"></script>

<!--  Plugin for DataTables.net  -->
<script src="{{ asset('assets') }}/js/jquery.datatables.js"></script>

<!--  Full Calendar Plugin    -->
<script src="{{ asset('assets') }}/js/fullcalendar.min.js"></script>

<!-- Paper Dashboard PRO Core javascript and methods for Demo purpose -->
<script src="{{ asset('assets') }}/js/paper-dashboard.js"></script>

<!-- Paper Dashboard PRO DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets') }}/js/demo.js"></script>

<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

</html>
