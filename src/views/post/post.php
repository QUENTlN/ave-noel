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

<header class="masthead" style="background: url(&quot;assets/img/daniel-olah-0VQPsAT3aog-unsplash.jpg&quot;);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div class="post-heading">
                    <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br></h1>
                    <h2 class="subheading">Mauris dolor mi, cursus nec facilisis vel, fermentum vel risus.<br></h2><span
                            class="meta">Posté par&nbsp;<a href="#">Quentin Vaillant</a>&nbsp;le 30 Septembre 2020 à 19h30</span>
                </div>
            </div>
        </div>
    </div>
</header>
<article>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <div>
                    <button class="btn btn-primary" type="button" data-toggle="modal"
                            data-target="#modalModificationPost">Modifier&nbsp;&nbsp;<i class="fa fa-pencil"></i>
                    </button>
                    <div class="modal fade" role="dialog" tabindex="-1" id="modalModificationPost">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Modifier Post</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group"><label>Titre</label><input
                                                class="form-control-plaintext form-control" type="text" value="Titre"
                                                readonly=""
                                                style="background: rgb(255,255,255);border: 1px solid #cbcbcb;border-right-width: 1px;font-family: Lora, serif;text-align: left;padding: 0px 5px;color: rgb(79,85,91);">
                                    </div>
                                    <div class="form-group"><label>Sujet</label><input type="text"
                                                                                       class="col-12 form-control"
                                                                                       placeholder="Sur quel sujet porte le Post">
                                    </div>
                                    <div class="form-group"><label>Texte</label><textarea class="col-12 form-control"
                                                                                          placeholder="Taper le texte du post"
                                                                                          style="font-size: 16px;height: 15em;"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-light" type="button" data-dismiss="modal">Fermer</button>
                                    <button class="btn btn-primary" type="button">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>Vivamus cursus egestas purus in molestie. Morbi at tellus orci. Pellentesque et nunc non leo posuere
                    suscipit quis id lorem. Donec at magna est. Etiam sed scelerisque risus. Donec aliquam gravida urna,
                    ac rutrum est pulvinar sed. Nam id
                    faucibus nisl, ac condimentum erat. Morbi eget bibendum orci. Donec ac tellus tristique, faucibus
                    elit eu, suscipit mauris. Curabitur vel interdum elit. Fusce interdum, justo non venenatis bibendum,
                    purus erat porta metus, eget dictum
                    purus odio a nisi. In egestas vulputate tincidunt. Aliquam erat volutpat. Ut vitae sapien pretium,
                    fringilla risus nec, porta tellus. Praesent malesuada lacinia magna, vel commodo ex.<br></p>
                <p>Integer sagittis, mauris id facilisis hendrerit, lacus nulla faucibus tellus, sodales congue lorem
                    turpis vitae lectus. Fusce sed sem interdum, gravida nunc vitae, luctus sem. Fusce erat ligula,
                    iaculis ac accumsan quis, vulputate a risus.
                    Quisque orci orci, commodo at suscipit eget, ornare sit amet mauris. Pellentesque auctor sem at arcu
                    fringilla, sed faucibus enim ullamcorper. Nullam vel vulputate lorem, at efficitur metus. Nulla
                    imperdiet imperdiet enim, in pellentesque
                    libero fringilla eu. Sed ac congue velit. Aliquam augue velit, accumsan vel facilisis ut, convallis
                    quis nunc.<br></p>
                <p>Quisque sed tellus id tellus posuere finibus vel bibendum ex. Nunc euismod ipsum et mollis ultricies.
                    Praesent id leo a risus egestas facilisis. Vivamus nec augue eu augue tempus porttitor. Etiam ornare
                    libero non lectus pretium, eget
                    pulvinar nisi tincidunt.<br></p>
                <p>Curabitur ante dolor, dapibus at purus ut, tempor sollicitudin ligula. Proin enim quam, ultricies
                    rhoncus dignissim ac, lacinia non nisl. Suspendisse non lorem dui. Duis ultricies quis purus vel
                    porttitor. Suspendisse finibus at purus
                    vitae mattis. Donec sagittis risus urna, vel consectetur nisi feugiat fringilla. Ut feugiat quam
                    quis nibh gravida, nec tempus magna eleifend. Sed tempus nibh quis lacus rhoncus, eu placerat magna
                    vulputate.<br></p>
                <p>Pellentesque scelerisque, augue in tristique maximus, justo ante ullamcorper nisi, in congue neque
                    lorem eget lacus. Mauris molestie, neque non convallis fringilla, tellus felis facilisis metus, vel
                    finibus est justo maximus nulla. Vestibulum
                    purus purus, suscipit vitae tempus eget, mattis quis tortor. Donec felis metus, imperdiet eget
                    facilisis et, auctor eget augue. Curabitur sed mattis est.<br></p>
                <h2 class="section-heading">Pellentesque habitant morbi<br></h2>
                <p>Curabitur ante dolor, dapibus at purus ut, tempor sollicitudin ligula. Proin enim quam, ultricies
                    rhoncus dignissim ac, lacinia non nisl. Suspendisse non lorem dui. Duis ultricies quis purus vel
                    porttitor.<br></p>
                <p>Curabitur ante dolor, dapibus at purus ut, tempor sollicitudin ligula. Proin enim quam, ultricies
                    rhoncus dignissim ac, lacinia non nisl. Suspendisse non lorem dui. Duis ultricies quis purus vel
                    porttitor. Suspendisse finibus at purus
                    vitae mattis. Donec sagittis risus urna, vel consectetur nisi feugiat fringilla. Ut feugiat quam
                    quis nibh gravida, nec tempus magna eleifend. Sed tempus nibh quis lacus rhoncus, eu placerat magna
                    vulputate.<br></p>
                <p>&nbsp;Donec sagittis risus urna, vel consectetur nisi feugiat fringilla. Ut feugiat quam quis nibh
                    gravida, nec tempus magna eleifend. Sed tempus nibh quis lacus rhoncus, eu placerat magna vulputate.<br>
                </p>
                <h2 class="section-heading">Praesent convallis<br></h2>
                <p>Integer sagittis, mauris id facilisis hendrerit, lacus nulla faucibus tellus, sodales congue lorem
                    turpis vitae lectus. Fusce sed sem interdum, gravida nunc vitae, luctus sem. Fusce erat ligula,
                    iaculis ac accumsan quis, vulputate a risus.&nbsp;<br></p>
                <p>Nulla imperdiet imperdiet enim, in pellentesque libero fringilla eu. Sed ac congue velit. Aliquam
                    augue velit, accumsan vel facilisis ut, convallis quis nunc.<br></p>
                <p>Fusce sed sem interdum, gravida nunc vitae, luctus sem. Fusce erat ligula, iaculis ac accumsan quis,
                    vulputate a risus. Quisque orci orci, commodo at suscipit eget, ornare sit amet mauris. Pellentesque
                    auctor sem at arcu fringilla, sed
                    faucibus enim ullamcorper. Nullam vel vulputate lorem, at efficitur metus. Nulla imperdiet imperdiet
                    enim, in pellentesque libero fringilla eu.<br></p>
                <p><span>Posté par&nbsp;</span><a href="#">Quentin
                        Vaillant</a><span>&nbsp;Le 30 Septembre 2020 à 19h30</span>.</p>
            </div>
            <div class="col-xl-3"
                 style="background: url(&quot;assets/img/daniel-olah-VS_kFx4yF5g-unsplash.jpg&quot;);"></div>
        </div>
    </div>
</article>

<?php require_once('src/views/layout/footer.php'); ?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/clean-blog.js"></script>
</body>

</html>