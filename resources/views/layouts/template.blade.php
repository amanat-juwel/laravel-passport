<!--
Project     : SHOILPIK LIMITED - ERP
Author URI  : http://v-linknetwork.com
Description : VIPOS SOFTWARE CREATED BY V-LINK NETWORK. 
Author      : V-LINK NETWORK | A LEADING SOFTWARE COMPANY IN CHITTAGONG, BANGLADESH. 
Developer   : Amanat Juwel
Version     : 1.0
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> :: Admin Panel</title>
    <link rel="shortcut icon" type="image/png" href='{{ url("") }}' />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <!-- {{ asset('public/assets/css/bootstrap.min.css') }} -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/components-rounded.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/select2.min.css') }}">
    <script src="{{ asset('public/js/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

</head>

<body class="hold-transition skin-blue sidebar-mini ">
    <div class="wrapper">
        <!-- Header -->
        <header class="main-header">
            <!-- Logo -->            
            <a href="{{ url('/') }}" class="logo hidden-xs">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><img src='' height="25" width="25"></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><img src='' height="50" width="200"></span>
            </a>
            <nav class="navbar">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        
                        @if (Auth::guest())
                            <li class="dropdown user user-menu">
                                <a href="{{ url('/login') }}">Login</a>
                            </li>
                        @else
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span class="hidden-xs">Hello, {{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ asset('public/image/boss.png')}}" class="img-circle" alt="User Image">
                                    <p>
                                        You are logged in as                                        
                                        @if(Auth::user()->role == 'admin')
                                        <small>Administrator</small>
                                        @else
                                        <small>Employee</small>
                                        @endif
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">

                           <!--          <div class="pull-left">
                                        <form action="{{ url('/users/edit') }}" method="post">
                                            {{ method_field('post') }}
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                            <button title="Edit Profile" class="btn btn-default btn-flat">
                                            <i class="fa fa-edit-o" aria-hidden="true"></i>Update Profile</button>
                                        </form>
                                    </div> -->
                                    <div class="pull-right">
                                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER -->
        <!-- SIDEBAR -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    <li>
                        <a href="{{ url('/home') }}">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                             

              </ul>
            </section>
        </aside>
        <!-- END SIDEBAR -->
        <!-- CONTENT SECTION -->
        <div class="content-wrapper">
            <!-- Start Main Content -->
                @yield('template')
            <!-- End Main Content -->
        </div>
        <!-- / END CONTENT -->
        <!-- START FOOTER -->
        <footer class="main-footer hidden-xs" id="noPrint">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        © Copright {{date('Y')}} | 
                    </div>
                    <div class="col-md-4">
                        School Management System <small>version 1.0</small>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END FOOTER -->
        
        
        <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('public/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/js/style.js') }}"></script>
        <script src="{{ asset('public/js/custom.js') }}"></script>
        <script src="{{ asset('public/js/select2.full.min.js') }}"></script>
        <!-- CK Editor -->
        <script src="{{ asset('public/js/ckeditor/ckeditor.js') }}"></script>
        <!-- CK Editor -->
        <script>
        function Initialize() {
            $('.select2').select2()
            } 
        </script>

        <script>
          $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

          })

          //Date picker
            $('#datepicker').datepicker({
              
              format: 'yyyy-mm-dd',
              autoclose: 'true',
            })
            $('#datepicker2').datepicker({
              
              format: 'yyyy-mm-dd',
              autoclose: 'true',
            })
            $(".date-picker").change(function() { 
                setTimeout(function() {
                    $(".date-picker").datepicker('hide'); 
                    $(".date-picker").blur();
                }, 50);
            });  
        </script>



</body>

</html>