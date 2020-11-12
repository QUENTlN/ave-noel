<?php ob_start(); ?>

<div class="login-dark" style="background: url(&quot;images/image4.jpg&quot;);">
    <form method="post" action="index.php?controller=entry&action=checkRegister">
        <h2 class="sr-only">Login Form</h2>
        <div class="illustration"><i class="icon ion-ios-email-outline"></i></div>
        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
        <div class="form-group"><input class="form-control" type="text" name="username"
                                       placeholder="Pseudo"></div>
        <div class="form-group"><input class="form-control" type="password" name="password"
                                       placeholder="Mot de passe">
        </div>
        <div class="form-group"><input class="form-control" type="password" name="password-confirm"
                                       placeholder="Confirmer le mot de passe"></div>
        <div class="form-group"><input class="form-control" type="text" name="name"
                                       placeholder="Prénom"></div>
        <div class="form-group"><input class="form-control" type="text" name="lastname"
                                       placeholder="Nom"></div>
        <div class="form-group">
            <div class="form-check"><input name="isFollowingNewsletter" class="form-check-input" type="checkbox" id="formCheck-1"
                                           style="margin: 10px 0 0 -20px;"><label class="form-check-label"
                                                                                  for="formCheck-1"
                                                                                  style="color: #495057;font-size: 16px;font-family: 'Open Sans', sans-serif;">S'inscrire
                    à la newsletter</label></div>
        </div>
        <?php
        if ($this->session->get('error') !== null) {
            echo '<div class="alert alert-warning" role="alert">'.$this->session->showFlashMessage('error').'</div>';
        }
        ?>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">S'inscrire</button>
        </div>
        <a class="forgot" href="index.php?controller=entry&action=login">Vous avez déjà un compte ?</a>
    </form>
</div>

<?php
$pageContent = ob_get_clean();
include_once "../src/views/layout/template.php";
?>