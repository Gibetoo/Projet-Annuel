<?php
session_start();

require_once 'entities/users/verif_connecter.php';

?>
<!DOCTYPE html>
<html lang="en">

<?php

require_once 'forms/head.php';
require_once 'entities/users/get_materiels.php';

?>

<body>

    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">

            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center"><span>+33 7 81 89 04 52</span></i>
                <i class="bi bi-clock d-flex align-items-center ms-4"><span>Lun-Dim: 10h - 23h</span></i>
            </div>

            <div class="languages d-none d-md-flex align-items-center">
                <ul>
                    <li>Fr</li>
                    <li><a href="#">En</a></li>
                    <li><a href="#">Pt</a></li>
                </ul>
            </div>
        </div>
    </div>

    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="/">Cook Master</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="/">Accueil</a></li>
                    <li><a class="nav-link scrollto" href="/#Abonnements">Abonnement</a></li>
                    <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])) { ?>
                        <li><a class="nav-link scrollto" href="/#recette">Recette</a></li>
                        <li><a class="nav-link scrollto" href="/#formation">Formation</a></li>
                        <li><a class="nav-link scrollto" href="/#reservation">Réservations</a></li>
                        <li><a class="nav-link scrollto active" href="page.materiels">Matériels</a></li>
                    <?php } ?>
                    <li><a class="nav-link scrollto" href="/#gallery">Galerie</a></li>
                    <li><a class="nav-link scrollto" href="/#chefs">Chefs</a></li>
                    <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <?php if (isset($_SESSION['user']) && !empty($_SESSION['user'])) { ?>
                <a href="page.profil" class="book-a-table-btn scrollto d-none d-lg-flex">Profil</a>
            <?php } else { ?>
                <a href="page.connexion" class="book-a-table-btn scrollto d-none d-lg-flex">Connexion</a>
            <?php } ?>
        </div>
    </header>

    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
                <div class="col-lg-8">
                    <h1><span>Cook Master</span> matériels</h1>
                    <h2>Découvrer toute notre collections et plus encore...</h2>
                </div>

            </div>
        </div>
    </section>

    <main id="main">

        <section id="materiels" class="why-us">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Nos matériels</h2>
                </div>

                <div class="row">

                    <?php foreach ($results as $materiel) {
                        echo '<div class="col-lg-4 mt-4">';
                        echo '<div class="card" style="background-color: #404040;">';
                        echo '<div class="container">';
                        echo '<div class="mx-5 mt-5 p-3 text-center" style="background-color: #CDA45E;border-radius: 15px;">';
                        echo '<img src="entities/users/upload/' . $materiel['image'] . '" style="height: 150px;width: auto;" class="card-img-top" alt="...">';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="card-body text-center mt-3 mb-3">';
                        echo '<h5 class="card-title">' . $materiel['nom_ma'] . '</h5>';
                        echo '<p class="card-text">' . $materiel['description'] . '</p>';
                        echo '<div class="mt-3">';
                        echo '<div class="container px-5">';
                        echo '<form action="" method="POST">';
                        echo '<button class="btn btn-secondary mt-3" style="background-color: grey;color: white;font-family: Gabriella;">Selectionner</button>';
                        echo '</form>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }; ?>

                </div>
            </div>
        </section>

    </main>

    <?php require_once 'forms/footer.php'; ?>

</body>

</html>