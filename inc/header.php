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

<?php if($section == "index") { ?>
    <nav class="navbar navbar-default navbar-fixed-top animated slideInDown duration-1 " role="navigation">
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
            <li class="animated slideInRight"><a href="#top-content">Home</a></li>
            <li class="dropdown animated slideInRight delay-1">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="animated slideInDown"><a href="#selfies">Selfies</a></li>
                <li class="animated slideInDown delay-1"><a href="#compares">Compares</a></li>
                <li class="animated slideInDown delay-2"><a href="#foodDiary">Food Diary</a></li>
                <li class="animated slideInDown delay-3"><a href="#scrapbooks">ScrapBooks</a></li>
                <li class="animated slideInDown delay-4"><a href="#explore">Discover</a></li>
                <li class="animated slideInDown delay-5"><a href="#fitfeed">Fit Feed</a></li>
              </ul>
            </li>
            <li class="animated slideInRight delay-2"><a href="prototype.php">Prototype</a></li>
            <li class="animated slideInRight delay-3"><a href="#contactUs"><i class="fa fa-envelope-o"></i></a></li>
            <li class="animated slideInRight delay-4 logout"><a href="home.php?logout=1"><i class="fa fa-lock"></i>  Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
<?php } else { ?>


<div class="top-content"  style="<?php if($nav == "no-nav") {echo "display: none";}; ?>">
    <div style="<?php echo $background; ?>" class="fullscreen-img">
            <div class="container">

                <div class="row">
                    <div class="col-sm-4">

                        <a href="home.php"><h4 class="back navbar-default-back navbar-fixed-top"><i class="fa fa-chevron-left"></i> BACK</h4></a>

                    </div>
                </div>

                    <div class="row">
                        <div class="col-sm-12 single-feature-text selfies_home">

                            <!-- Padding inserted here to pull out page. -->
                            
                        </div>

                    </div>
            </div>
    </div>
</div>

<?php } ?>






