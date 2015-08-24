<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> @section('title') @show </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- REQUIRED JS SCRIPTS -->
    @include('includes/styles')
    <!-- REQUIRED JS SCRIPTS -->
    @include('includes/scripts')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">

<!-- Notificaiones  -->
@if (Session::has('message'))
    <script> notificacion( '<?php echo Session::get('message') ?>' ) </script>
@endif

<div class="wrapper">

    <!-- Header -->
    @include('includes/header')

    <!-- Sidebar -->
    @include('includes/sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               @section('titulo') @show
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
            <ol class="breadcrumb">
                @section('breadcrumb') 
                @show
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section><!-- /.content -->

    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('includes/footer')

</div><!-- ./wrapper -->


</body>
</html>