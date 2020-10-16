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

<header class="masthead" style="background: url('assets/img/daniel-olah-pCcGpVsOHoo-unsplash.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div class="site-heading">
                    <h1><strong>Contactez-nous</strong><br></h1><span
                            class="subheading">Un message à nous envoyer ?</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto">
            <p>Vous voulez nous joindre ? Replisser le formulaire si dessous et nous vous répondrons dès que possible
                !</p>
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls"><label for="name">Name</label><input
                                class="form-control" type="text" id="name" required="" placeholder="Nom"><small
                                class="form-text text-danger help-block"></small></div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls"><label for="email">Email
                            Address</label><input class="form-control" type="email" id="email" required=""
                                                  placeholder="Adresse Mail"><small
                                class="form-text text-danger help-block"></small></div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls"><label for="phone">Phone
                            Number</label><input class="form-control" type="text" id="phone" required=""
                                                 placeholder="Sujet"><small
                                class="form-text text-danger help-block"></small></div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls mb-3"><label for="message">Message</label><textarea
                                class="form-control" id="message"
                                data-validation-required-message="Please enter a message." required=""
                                placeholder="Message" rows="5"></textarea><small
                                class="form-text text-danger help-block"></small></div>
                </div>
                <div id="success"></div>
                <div class="form-group">
                    <button class="btn btn-primary" id="sendMessageButton" type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>

<?php require_once('src/views/layout/footer.php'); ?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/clean-blog.js"></script>
</body>

</html>