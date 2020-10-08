<!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Ave Noel - Blog</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    </head>

    <body>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand" href="index.php?controller=home">AVE NOEL</a>
                <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php?controller=home">ACCUEIL</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?controller=contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?controller=entry&action=login" style="padding: 5px;">
                                <button class="btn btn-primary" type="button" style="height: 30px;font-size: 12px;padding: 5px 10px;">se connecter
                                </button>
                            </a></li>
                        <li class="nav-item dropdown" style="padding: 0px 10px;"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="padding: 0;"><img style="width: 40px;height: 40px;" src="assets/img/avatar-homme.png"></a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">Notifications<img style="width: 20px;height: 20px;padding: 5px;background: url(&quot;1024px-Cercle_rouge_100%.svg.png&quot;);" src="assets/img/téléchargement.jpg"></a><a class="dropdown-item" href="#">Mes
                                    posts</a>
                                <a class="dropdown-item" href="#" style="color: rgb(141,26,26);font-style: normal;font-family: 'Open Sans', sans-serif;"><strong>Se
                                        déconnecter</strong></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php require_once('routes.php'); ?>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></li>
                            <li class="list-inline-item"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></li>
                            <li class="list-inline-item"><a href="https://github.com/QUENTlN"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-github fa-stack-1x fa-inverse"></i></span></a></li>
                        </ul>
                        <p class="text-muted copyright">Copyright&nbsp;©&nbsp;Miage 2020</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/clean-blog.js"></script>
    </body>

    </html>