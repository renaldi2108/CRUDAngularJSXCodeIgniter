<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>AngularJS and CodeIgniter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>
      var BASE_URL = "<?php echo base_url(); ?>";
    </script>

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo site_url('maincontroller#/'); ?>">AngularJS and CodeIgniter</a>
        </div>
      </div>
    </div>

    <div class="container">

      <div ng-app="ren">
        
        <div class="page-header">
        <a href="#!add">Add</a>
        <a href="#!">List</a>
        </div>

        <div ng-view></div>

      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular-route.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/angular.js"></script>

  </body>
</html>