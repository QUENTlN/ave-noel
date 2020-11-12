<?php ob_start(); ?>
    <div class="login-dark" style="background: url(&quot;images/image4.jpg&quot;);">
        <form method="post" action="index.php?controller=entry&action=checkLogin">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-contact-outline" style="opacity: 1;color: #214a80;"></i>
            </div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password"
                                           placeholder="Mot de passe">
            </div>
            <div class="form-group">
                <div class="form-check"><input name="rememberMe" class="form-check-input" type="checkbox" id="formCheck-1"
                                               style="margin: 10px 0 0 -20px;"><label class="form-check-label"
                                                                                      for="formCheck-1"
                                                                                      style="color: #495057;font-size: 16px;font-family: 'Open Sans', sans-serif;">Se souvenir de moi</label></div>
            </div>
                <?php
                if (null !== $this->session->get('error')) {
                    echo '<div class="alert alert-warning">'.$this->session->showFlashMessage('error').'</div>';
                }
                ?>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" style="background: #214a80;">SE CONNECTER
                </button>
            </div>
            <a class="forgot" href="#">Vous avez oublié votre mot de passe ?</a><a class="forgot"
                                                                                   href="index.php?controller=entry&action=register">Vous
                n'avez pas encore de compte ?</a>
        </form>
    </div>

<?php
$pageContent = ob_get_clean();
include_once "../src/views/layout/template.php";
?>