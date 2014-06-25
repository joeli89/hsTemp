<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $pageTitle; ?></title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oleo+Script">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/buttons.css">
        <link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-general.css">
		<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-sizes.css">
		<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-shapes.css">
		<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-bg-colors.css">
		<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-bg-images-48.css">
		<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-effects.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/social.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/overwrite.css">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon1.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

<body data-spy="scroll" data-target=".navbar">

    <nav class="navbar navbar-default navbar-fixed-top animated slideInDown duration-1 " role="navigation" style="<?php if($nav == "no-nav") {echo "display: none";}; ?>">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-this">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Healthy Selfie</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-this">
          <ul class="nav navbar-nav navbar-right">
            <li class="animated slideInRight"><a href="#selfies">Selfies</a></li>
            <li class="animated slideInRight delay-1"><a href="#compares">Compares</a></li>
            <li class="animated slideInRight delay-2"><a href="#foodDiary">Food Diary</a></li>
            <li class="animated slideInRight delay-3"><a href="#scrapbooks">ScrapBooks</a></li>
            <li class="animated slideInRight delay-4"><a href="#explore">Explore</a></li>
            <li class="animated slideInRight delay-5"><a href="#fitfeed">Fit Feed</a></li>
            <li class="animated slideInRight delay-6"><a href="#contactUs"><i class="fa fa-envelope-o"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>


