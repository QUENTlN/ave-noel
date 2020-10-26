<?php ob_start(); ?>
<header class="masthead" style="background: url(&quot;images/image2.jpg&quot;)">
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
<?php
$pageContent = ob_get_clean();
include_once "../src/views/layout/template.php";
?>
