<?php ob_start(); ?>
    <header class="masthead" style="background: url(&quot;images/image4.jpg&quot;);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading" style="padding: 100px;padding-bottom: 50px;">
                        <img class="col-6" src="images/user-icon/<?= $client->getAvatarPath() ?>">
                        <h1><?= $client->getUsername() ?></h1>
                        <span class="subheading" style="margin-bottom: 20px;">
                            <?= $client->getName() . " " . $client->getLastname() ?><br>
                        </span>
                        <small>Dernièreconnexion : <?= $client->getLastConnectionAt() ?></small>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 offset-md-0">
                <div style="margin-bottom: 20px;">
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
                                            style="background: rgb(255,255,255);border: 1px solid #cbcbcb;border-right-width: 1px;font-family: Lora, serif;text-align: left;padding: 0px 5px;color: rgb(79,85,91);">
                                </div>
                                <div
                                        class="form-group"><label>Sujet</label><input type="text"
                                                                                      class="col-12 form-control"
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
                <?php
                foreach ($posts as $post) {
                    echo "<div class='post-preview'>
                <a href='index.php?controller=post&post=" . $post->getId() . "'>
                    <div class='row'><strong
                                style='font-size: 25px;color: rgb(255,255,255);background: rgb(0,133,161);padding: 10px;height: 70px;margin-top: 5px;'>" . $post->getSubject() . "<br></strong>
                        <h2 class='post-title col'><strong>" . $post->getTitle() . "</strong></h2>
                    </div>
                    <h3 class='post-subtitle' style='color: #212529;'>" . $post->getContent() . "<br></h3>
                    <p class='post-meta'>Posté par&nbsp;<a href='index.php?controller=client&action=posts&idClient=" . $post->getIdClient() . "'>" . $post->getUsername() . "</a>, le " . $post->getCreatedAt() . ".
                    </p>
                </a>
            </div>
            <hr>";
                }

                ?>
                <div class="clearfix text-center">
                    <button class="btn btn-primary" type="button">Voir LES POSTS PLUS ANCIEN</button>
                </div>
            </div>
            <div class="col" src="" style="background: url(&quot;images/image3.jpg&quot;);"><img></div>
        </div>
    </div>
<?php
$pageContent = ob_get_clean();
include_once "../src/views/layout/template.php";
?>