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

<div class="login-dark" style="background: url(&quot;assets/img/daniel-olah-WTryhvndNZc-unsplash.jpg&quot;);">
    <form method="post">
        <h2 class="sr-only">Login Form</h2>
        <div class="illustration"><i class="icon ion-ios-contact-outline" style="opacity: 1;color: #214a80;"></i>
        </div>
        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
        <div class="form-group"><input class="form-control" type="password" name="password"
                                       placeholder="Mot de passe">
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit" style="background: #214a80;">SE CONNECTER
            </button>
        </div>
        <a class="forgot" href="#">Vous avez oublié votre mot de passe ?</a><a class="forgot"
                                                                               href="index.php?controller=entry&action=register">Vous
            n'avez pas encore de compte ?</a>
    </form>
</div>

<?php require_once('src/views/layout/footer.php'); ?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/clean-blog.js"></script>
</body>

</html>