<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MuzikHub</title> 
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- TMQ Custom CSS -->
    <link rel="stylesheet" href="/css/admin-custom.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery -->
        <script src="/js/jquery.min.js"></script>

        <!-- AngularJS -->
        <script src="/js/angular.min.js"></script>

        <!-- Angular Upload file -->
        <script src="/js/ng-file-upload-shim.min.js"></script> <!-- for no html5 browsers support -->
        <script src="/js/ng-file-upload.min.js"></script>

        <!-- Auto-complete module -->
        <script src="/js/bootstrap3-typeahead.js"></script>
        <script src="/js/angular-bootstrap3-typeahead.js"></script>
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            @include('admin.partial.navbar')
            <!-- End Navigation -->

            <div id="page-wrapper">
                @yield('body.content')
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Bootstrap Core JavaScript -->
        <script src="/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="/js/sb-admin-2.min.js"></script>
</body>

</html>
