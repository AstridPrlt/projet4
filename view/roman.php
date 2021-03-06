<?php 
    $title = "Billet simple pour l'Alaska - Le Roman";

    ob_start(); ?>

    <!-- Masthead-->
    <header class="jumbotron-fluid h-50 flex-shrink-0">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-middle">
                    <h1 class="text-uppercase text-white font-weight-bold">Le Roman</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="page-section">

        <?php
            // foreach($allPosts as $dataPost) {
                for($i = 0; $i<count($allPosts); $i++) {
                    // $rank = $postManager->rankPost($allPosts[$i][0]);
        ?>

        <div class="container mb-5">
            <div class="card text-center">
                <h3 class="card-header text-left">Episode <?= $allPosts[$i]['rank_id'] . " : " . $allPosts[$i]['title']; ?></h3>
                <div class="card-body">
                  <p class="card-text text-left"><?= substr($allPosts[$i]['content'], 0, 600) ?><a href="index?p=post&amp;id=<?= $allPosts[$i]['id']?>&amp;rank=<?= $allPosts[$i]['rank_id']?>">...Lire la suite</a></p>
                </div>
            </div>
        </div>

        <?php
            }
        ?>

        </section>

    <?php $content = ob_get_clean();

    require 'layout.php';
?>