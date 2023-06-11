<?php
session_start();

require_once 'entities/users/verif_connecter.php';

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once 'forms/head.php'; ?>

<body>

    <?php require_once 'forms/header_base_admin.php'; ?>

    <!-- ======= Hero Main ======= -->
    <main id="hero" class="d-flex align-items-center">
        <div class="shadow-box">
            <div class="row">
                <form action="entities/users/new_prest.php" method="POST" enctype="multipart/form-data">
                    <h1 class="text-center">Ajouter un prestataire</h1>

                    <div class="d-flex">

                        <div class="mt-3 mx-5">
                            <div class="mt-3">
                                <label for="exampleFormControlInput1" class="form-label">Nom</label>
                                <input type="text" name="nom_pres" class="form-control" id="exampleFormControlInput1" placeholder="Nom">
                            </div>
                            <div class="mt-3">
                                <label for="inputPassword5" class="form-label">Prénom</label>
                                <input type="text" name="prenom_pres" id="inputPassword5" class="form-control" placeholder="Prénom" aria-labelledby="passwordHelpBlock">
                            </div>
                            <div class="mt-3">
                                <label for="telephone" class="form-label">Numero de téléphone</label>
                                <input type="number" name="num_tel_pres" class="form-control" placeholder="N°" pattern="[0-9]+" maxlength="12" inputmode="numeric" required >
                            </div>
                            <div class="mt-3">
                                <label class="mt-3" for="sel1">Métier :</label>
                                <select class="form-control" id="sel1" name='metier'>
                                    <option selected>Métier</option>
                                    <option value='1'>Chef patissier</option>
                                    <option value='2'>Chef cuisinier</option>
                                    <option value='3'>Livreur</option>
                                    <option name='4'>Serveur</option>

                                </select>
                            </div>


                        </div>

                        <div class="mt-3 mx-5">
                            <div class="mt-3">
                                <label for="inputPassword5" class="form-label">Email</label>
                                <input type="email" name="email_pres" id="inputPassword5" class="form-control" placeholder="Email" aria-labelledby="passwordHelpBlock">
                            </div>
                            <div class="mt-3">
                                <label for="inputPassword5" class="form-label">Mot de passe</label>
                                <input type="text" name="password_pres" id="inputPassword5" class="form-control" placeholder="Mot de passe" aria-labelledby="passwordHelpBlock">
                            </div>

                            <div class="mt-3">
                                <label for="disabledSelect" class="form-label">Diplôme :</label>
                                <div class="input-group ">
                                    <input type="file" class="form-control" name="fiche" accept=".pdf">
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="disabledSelect" class="form-label">Photo de profil :</label>
                                <div class="input-group ">
                                    <input type="file" class="form-control" name="photo_pres" accept="image/jpg, image/gif, image/png, image/jpeg">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <button type="submit" class="btn-menu animated fadeInUp scrollto" style="background-color: #cda45e;border-color: #cda45e;">Créé</button>
                    </div>
                </form>
            </div>
        </div>

    </main><!-- End Main -->

    <?php require_once 'forms/footer.php'; ?>

</body>

</html>