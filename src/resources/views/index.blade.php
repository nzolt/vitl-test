<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>VITL - Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('/theme/bootstrap.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/theme/usebootstrap.css') }}">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('/bootstrap/html5shiv.js') }}"></script>
    <script src="{{ asset('/bootstrap/respond.min.js') }}"></script>
    <![endif]-->
    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet">
</head>
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="" class="navbar-brand" style="position: relative; padding: 0 0">VITL</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="" target="">Users</a></li>
            </ul>
        </div>
    </div>
</div>


<div class="container">


    <!-- Tables
    ================================================== -->

    <div class="row">
        <div class="col-lg-12">
            <div id="status" class="bs-component">
                @yield('content')
            </div>
        </div>
    </div>
</div>

<script src="/bootstrap/bootstrap.min.js"></script>
<script src="/bootstrap/usebootstrap.js"></script>

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="http://getbootstrap.com/2.3.2/assets/js/jquery.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap.js"></script>

<script src="http://getbootstrap.com/2.3.2/assets/js/holder/holder.js"></script>
<script
        src="http://getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>

<script src="http://getbootstrap.com/2.3.2/assets/js/application.js"></script>
</body>
</html>
