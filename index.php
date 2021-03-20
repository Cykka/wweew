<?php
include "config.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $Title?></title>
    <link rel="icon" type="image/png" href="<?php echo $favicon?>">
    <meta property="og:site_name" content="<?php echo $Title?>">
    <meta property="og:url" content="<?php echo $Url?>">
    <meta property="og:title" content="<?php echo $Title?>">
    <meta property="og:description" content="<?php echo $Description?>">
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<?php if ((isset($discord) && !empty($discord))&&(isset($discordimg) && !empty($discordimg))): ?>
    <div class="discord">
        <a href="<?php echo $discord ?>" target="_blank"><img src="<?php echo $discordimg ?>"></a>
    </div>
<?php endif; ?>

<script type="text/javascript" src="https://cdn.sellix.io/static/js/embed.js"></script>
    <nav class="navbar navbar-dark navbar-expand-md" id="app-navbar" style="background: transparent;">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler mx-auto" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <?php foreach ($navbar as $r2): ?>
                        <li class="nav-item" role="presentation"><a class="nav-link active" id="NavItem" href="<?php echo htmlentities($r2["href"]) ?>"><?php echo htmlentities($r2["item"]) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="Title"><?php echo $STitle?></h1>
                    <h4 id="Desc"><?php echo $SDesc?></h4>
                </div>
                <div class="col-md-12" style="text-align: center;"><?php foreach ($btns as $r2): ?><a href="<?php echo htmlentities($r2["link"]) ?>"><button class="btn btn-primary" id="Buttons" type="button"><?php echo htmlentities($r2["Txt"]) ?></button></a><?php endforeach; ?></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="Features"><?php echo $FTitle?></h1>
                    <h1 id="FeaturesDesc"><?php echo $FDesc?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="features-boxed" style="background-color: transparent;">
        <div class="container">
            <div class="intro"></div>
            <div class="row justify-content-center features">
                <?php foreach ($Features as $r2): ?>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box" style="background-color: transparent;"><i class="<?php echo $r2["Icon"] ?>" id="icon"></i>
                        <h3 class="name"><?php echo htmlentities($r2["Title"]) ?><br></h3>
                        <p class="description"><?php echo htmlentities($r2["Desc"]) ?><br></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 id="Features"><?php echo $PTitle?></h1>
                    <h1 id="FeaturesDesc"><?php echo $PDesc?></h1>
                </div>
            </div>
        </div>
    </div>
    <div style="margin: 15px;">
        <div class="container">
            <div class="row">
                <?php foreach ($Products as $r2): ?>
                <div class="col-md-4" style="margin-top: 15px;">
                    <div class="card-group">
                        <div class="card" id="Thumbnail"><img class="card-img-top w-100 d-block" id="ProductImg" src="<?php echo $r2["Image"] ?>">
                            <div class="card-body" style="border-radius: 1rem;">
                                <h3 class="card-title" id="ProductTitle"><?php echo $r2["Name"] ?></h3>
                                <p class="card-text" id="ProductDesc"> <?php echo $r2["Desc"] ?></p><a class="card-link" href="#"><button class="btn btn-primary" id="ProductBTN" type="button" data-sellix-product="<?php echo $r2["ID"] ?>">PURCHASE</button></a></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

<?php if (!empty($youtubeMusicLink)) {
    embedMusic($youtubeMusicLink);
} ?>

</body>

</html>
