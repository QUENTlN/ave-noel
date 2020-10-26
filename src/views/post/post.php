<?php ob_start(); ?>
    <header class="masthead" style="background: url(&quot;images/image1.jpg&quot;);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="post-heading">
                        <h1><?= $post->getTitle() ?><br></h1>
                        <h2 class="subheading"><?= $post->getSubject() ?><br></h2>
                        <span class="meta"> Posté par <a
                                    href="index.php?controller=client&action=posts&idClient=<?= $post->getIdClient() ?>"><?= $post->getUsername() ?></a>&nbsp;le <?= $post->getCreatedAt() ?> <?php if ($post->getUpdatedAt() != null) {
                                echo("(modifier le " . $post->getUpdatedAt() . ")");
                            } ?></span></div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row" style="border-width: 1px;border-color: #212529;">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div>
                        <button class="btn btn-primary" type="button" data-toggle="modal"
                                data-target="#modalUpdatePost"> Modifier &nbsp;&nbsp;<i class="fa fa-pencil"></i>
                        </button>
                        <div class="modal fade" role="dialog" tabindex="-1" id="modalUpdatePost">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"> Modifier Post </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"> ×</span></button>
                                    </div>
                                    <form action="index.php?controller=post&action=update" method="post">
                                        <div class="modal-body">
                                            <div class="form-group"><label> Titre</label><input name="title"
                                                                                                class="form-control-plaintext form-control"
                                                                                                type="text"
                                                                                                plaveholder="Titre"
                                                                                                value="<?= $post->getTitle() ?>"
                                                                                                style="background: rgb(255,255,255);border: 1px solid #cbcbcb;font-family: Lora, serif;text-align: left;padding: 0px 5px;color: rgb(79,85,91);">
                                            </div>
                                            <div
                                                    class="form-group"><label> Sujet</label><input name="subject"
                                                                                                   type="text"
                                                                                                   class="col-12 form-control"
                                                                                                   placeholder="Sur quel sujet porte le Post"
                                                                                                   value="<?= $post->getSubject() ?>">
                                            </div>
                                            <div class="form-group"><label> Texte</label><textarea name="content"
                                                                                                   class="col-12 form-control"
                                                                                                   placeholder="Taper le texte du post"
                                                                                                   style="font-size: 16px;height: 15em;"><?= $post->getContent() ?></textarea>
                                            </div>
                                            <input name="idPost" type="hidden" value="<?= $post->getId() ?>" readonly>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-light" type="button" data-dismiss="modal"> Fermer
                                            </button>
                                            <button class="btn btn-primary" type="submit"> Enregistrer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="button" style="margin-left: 10px;" data-toggle="modal"
                                data-target="#modalDeletePost"><i class="fa fa-trash"></i></button>
                        <div class="modal fade" role="dialog" tabindex="-1" id="modalDeletePost">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" style="font-size: 23px;"><strong> Êtes - vous sûr de
                                                vouloir supprimer ?</strong></h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"> ×</span></button>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-light" type="button" data-dismiss="modal"> NON</button>
                                        <form action="index.php?controller=post&action=delete" method="post">
                                            <input name="idPost" type="hidden" readonly value="<?= $post->getId() ?>">
                                            <button class="btn btn-primary" type="submit"> OUI</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p><?= $post->getContent() ?><br></p>
                    <p><span> Posté par </span><a
                                href="#"><?= $post->getUsername() ?></a><span>, le <?= $post->getCreatedAt() ?> </span>.
                    </p>
                    <hr>
                    <div style="padding: 0px 30px;">
                        <div>
                            <?php foreach ($comments as $comment): ?>

                                <div class="row"
                                     style="background: rgba(0,0,0,0.03);padding: 20px;margin-bottom: 20px;">
                                    <div class="col col-sm-12 p-0">
                                        <div class="row col-12 p-0 m-0">
                                            <div class="col p-0">
                                                <div class="float-right">
                                            <span>
                                                <i class="fa fa-edit" data-toggle="modal"
                                                   data-target="#modalUpdateComment"
                                                   style="margin-right: 10px;"></i>
                                                <i class="fa fa-remove" data-toggle="modal"
                                                   data-target="#modalDeleteComment"></i>
                                            </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-2">
                                        <div class="row">
                                            <div class="col-12" style="text-align: center;">
                                                <img class="col-12" style="max-width: 150px;"
                                                     src="images/user-icon/<?= $comment->getAvatarPath() ?>">
                                                <strong style="font-family: 'Open Sans', sans-serif;"><?= $comment->getUsername() ?></strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-10">

                                        <div class="row">
                                            <div class="col" style="margin-bottom: 10px;"><span
                                                        style="font-family: 'Open Sans', sans-serif;"><?= $comment->getContent() ?></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div style="border-width: 1px;border-color: rgba(33,37,41,0.3);border-top-style: solid;">
                                                    <small class="col-12" style="color: rgba(33,37,41,0.78);">Postée le&nbsp;<?= $comment->getCreatedAt() ?><?php if ($comment->getUpdatedAt() != null) {
                                                            echo(' (modifier)');
                                                        } ?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" role="dialog" tabindex="-1" id="modalUpdateComment">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Modifier commentaire</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <form action="index.php?controller=comment&action=update"
                                                          method="post">
                                                        <div class="modal-body">
                                                            <textarea name="content" class="col-12"
                                                                      style="height: 150px;"><?= $comment->getContent() ?></textarea>
                                                            <input name="idComment" type="hidden"
                                                                   value="<?= $comment->getId() ?>" readonly>
                                                            <input name="idPost" type="hidden"
                                                                   value="<?= $post->getId() ?>" readonly>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-light" type="button"
                                                                    data-dismiss="modal">
                                                                fermer
                                                            </button>
                                                            <button class="btn btn-primary" type="submit">enregistrer
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" role="dialog" tabindex="-1" id="modalDeleteComment">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" style="font-size: 23px;">Ê<strong>tes-vous
                                                                sûr de vouloir supprimer</strong>&nbsp;?</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form action="index.php?controller=comment&action=delete"
                                                              method="post">
                                                            <button class="btn btn-light" type="button"
                                                                    data-dismiss="modal">
                                                                non
                                                            </button>
                                                            <input name="idComment" type="hidden"
                                                                   value="<?= $comment->getId() ?>" readonly>
                                                            <input name="idPost" type="hidden"
                                                                   value="<?= $post->getId() ?>" readonly>
                                                            <button class="btn btn-primary" type="submit">oui</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div>
                                <div class="row" style="background: rgba(0,0,0,0.03);padding: 20px;">
                                    <div class="col">
                                        <form action="index.php?controller=comment&action=create"
                                              method="post">
                                            <div class="form-row">
                                                <div class="col" style="text-align: center;"><textarea
                                                            class="form-control"
                                                            style="height: 100px;"
                                                            name="content"
                                                            placeholder="Tape ton message ici"></textarea>
                                                </div>
                                                <input name="idPost" type="hidden" readonly
                                                       value="<?= $post->getId() ?>">
                                                <input name="idClient" type="hidden" readonly value="1">
                                            </div>
                                            <div class="form-row">
                                                <div class="col justify-content-end" style="text-align: center;">
                                                    <button class="btn btn-primary" type="submit"
                                                            style="margin-top: 15px;"> PUBLIER
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3" style="background: url(&quot;images/image3.jpg&quot;);"></div>
            </div>
    </article>
<?php
$pageContent = ob_get_clean();
include_once "../src/views/layout/template.php";
?>