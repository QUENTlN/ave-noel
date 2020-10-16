<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Ave Noel - Blog</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
</head>

<body>

<?php require_once('src/views/layout/navbar.php'); ?>

<header class="masthead" style="background: url(&quot;assets/img/daniel-olah-WTryhvndNZc-unsplash.jpg&quot;);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div class="site-heading">
                    <h1>AVE NOEL&nbsp;Blog</h1><span class="subheading">Un blog qui ne va pas servir à grand chose.<br></span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-8 offset-md-0">
            <div class="text-center mb-5" style="margin-bottom: 20px;">
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalPostCreation">
                    Nouveau Post&nbsp;&nbsp;<i class="fa fa-plus-circle"></i></button>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="modalPostCreation">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Creer un post</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body" style="border-style: none;">
                            <div class="form-group"><label>Titre</label><input
                                        class="form-control-plaintext form-control" type="text" value="Titre"
                                        readonly=""
                                        style="background: rgb(255,255,255);border: 1px solid #cbcbcb;font-family: Lora, serif;text-align: left;padding: 0 5px;color: rgb(79,85,91);">
                            </div>
                            <div class="form-group"><label>Sujet</label><input type="text" class="col-12 form-control"
                                                                               placeholder="Sur quel sujet porte le Post">
                            </div>
                            <div class="form-group"><label>Texte</label><textarea class="col-12 form-control"
                                                                                  placeholder="Taper le texte du post"
                                                                                  style="font-size: 16px;height: 15em;"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-light" type="button" data-dismiss="modal">FERMER</button>
                            <button class="btn btn-primary" type="button">poster</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-preview">
                <a href="index.php?controller=post">
                    <div class="row"><strong
                                style="font-size: 25px;color: rgb(255,255,255);background: rgb(0,133,161);padding: 10px;height: 70px;margin-top: 5px;">Sujet<br></strong>
                        <h2 class="post-title col"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</strong></h2>
                    </div>
                    <h3 class="post-subtitle" style="color: #212529;">Etiam molestie gravida bibendum. Phasellus
                        vestibulum ipsum in porttitor semper. Sed convallis lacus at justo porta, ut iaculis nisl
                        feugiat. Nullam ac vestibulum tellus. Fusce eget iaculis sem, et blandit orci...<br></h3>
                    <p class="post-meta">Posté par&nbsp;<a href="#">Quentin Vaillant</a>, le 30 Septembre 2020 à 19h30.
                    </p>
                </a>
            </div>
            <hr>
            <div class="post-preview">
                <a href="index.php?controller=post">
                    <div class="row"><strong
                                style="font-size: 25px;color: rgb(255,255,255);background: rgb(0,133,161);padding: 10px;height: 70px;margin-top: 5px;">Sujet<br></strong>
                        <h2 class="post-title col"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</strong></h2>
                    </div>
                    <h3 class="post-subtitle" style="color: #212529;">Etiam molestie gravida bibendum. Phasellus
                        vestibulum ipsum in porttitor semper. Sed convallis lacus at justo porta, ut iaculis nisl
                        feugiat. Nullam ac vestibulum tellus. Fusce eget iaculis sem, et blandit orci...<br></h3>
                    <p class="post-meta">Posté par&nbsp;<a href="#">Quentin Vaillant</a>, le 30 Septembre 2020 à 19h30.
                    </p>
                </a>
            </div>
            <hr>
            <div class="post-preview">
                <a href="index.php?controller=post">
                    <div class="row"><strong
                                style="font-size: 25px;color: rgb(255,255,255);background: rgb(0,133,161);padding: 10px;height: 70px;margin-top: 5px;">Sujet<br></strong>
                        <h2 class="post-title col"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</strong></h2>
                    </div>
                    <h3 class="post-subtitle" style="color: #212529;">Etiam molestie gravida bibendum. Phasellus
                        vestibulum ipsum in porttitor semper. Sed convallis lacus at justo porta, ut iaculis nisl
                        feugiat. Nullam ac vestibulum tellus. Fusce eget iaculis sem, et blandit orci...<br></h3>
                    <p class="post-meta">Posté par&nbsp;<a href="#">Quentin Vaillant</a>, le 30 Septembre 2020 à 19h30.
                    </p>
                </a>
            </div>
            <hr>
            <div class="post-preview">
                <a href="index.php?controller=post">
                    <div class="row"><strong
                                style="font-size: 25px;color: rgb(255,255,255);background: rgb(0,133,161);padding: 10px;height: 70px;margin-top: 5px;">Sujet<br></strong>
                        <h2 class="post-title col"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</strong></h2>
                    </div>
                    <h3 class="post-subtitle" style="color: #212529;">Etiam molestie gravida bibendum. Phasellus
                        vestibulum ipsum in porttitor semper. Sed convallis lacus at justo porta, ut iaculis nisl
                        feugiat. Nullam ac vestibulum tellus. Fusce eget iaculis sem, et blandit orci...<br></h3>
                    <p class="post-meta">Posté par&nbsp;<a href="#">Quentin Vaillant</a>, le 30 Septembre 2020 à 19h30.
                    </p>
                </a>
            </div>
            <div class="clearfix text-center">
                <button class="btn btn-primary" type="button">Voir LES POSTS PLUS ANCIEN</button>
            </div>
        </div>
        <div class="col" style="background: url('assets/img/daniel-olah-VS_kFx4yF5g-unsplash.jpg');">
        </div>
    </div>
</div>

<?php require_once('src/views/layout/footer.php'); ?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/clean-blog.js"></script>
</body>

</html>