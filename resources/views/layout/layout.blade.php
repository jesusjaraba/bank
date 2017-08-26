<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link  href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <title>PoppCorn Bank</title>

</head>

<body >
   <header>
     <nav class ="navbar  navbar-default navbar-fixed-top">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
         <span class="sr-only">Toogle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button> <!--navbar-toogle-->
         <a class="navbar-brand" href="" >
           
        <p>PappCorn Bank</p> 
         </a><!--navbar.brand-->

       </div>  <!--navbar-header-->

       <div class="collapse navbar-collapse">
         <ul class="nav navbar-nav navbar-right">
         <li><a href="/customer" data-toggle="modal" data-target="">Customers</a></li>
         <li><a href="/bank" data-toggle="modal" data-target="">Banks</a></li>
           
         </ul>
       </div>
     </div>  <!--container-->
     </nav><!--.navbar-->
   </header>
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        
                    </div>

                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class=""=>
            
            </div>
            <div class=""></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script>
    $(document).ajaxStart($.blockUI).ajaxStop($.unblockUI);

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  }
    });
</script>
@yield('script')


</body>
</html>
