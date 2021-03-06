<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font awesome -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- Style fatNav -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/jquery.fatNav.css">
    <!--Style micromodal-->
    <link rel="stylesheet" href="asset/flexslider/flexslider.css">
    <!--Style micromodal-->
    <link rel="stylesheet" href="asset/css/micromodal-style.css">
    <!--Style Perso-->
    <link rel="stylesheet" href="asset/css/style.css">
</head>

<body>
    <header>
        <div class="fat-nav">
            <div class="fat-nav__wrapper">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="about-us.php">A Propos</a></li>
                    <?php if (isLogged()) {
                        echo '<li><a href="client-area.php">Votre Espace</a></li>';
                        echo '<li><a href="logout.php">Se deconnecter</a></li>';
                    } ?>
                </ul>
            </div>
        </div>
        <!-- <img src="asset/img/triangle.png" class="banner-img"> -->
    </header>
    <!-- <div class="wrapper"> -->