<?php
$table='tgj_galery';
$destination = 'media.php';
include_once 'ia/inc/log.php';
include_once 'inc/head.php';
?>
<section id="main">		
    <h1>Tempogym Jette</h1>
    <section id="galery">
        <article>
            <h2>Galerie</h2>
            <p>
                Connectez-vous pour visualiser les photographies et les vidéos du club

            </p>
            <form action="" method="POST" id="connexion" name="connexion">
                <input type="text" name="lelogin" placeholder="Votre login" required />
                <input type="password" name="lemdp" placeholder="Votre mot de passe" required /> 
                <input type="submit" value="Connexion" />
                <?php
                // si erreur on l'affiche
                if (isset($erreur_connect))
                    echo $erreur_connect;
                ?>
            </form>
        </article>
        <?php
        include_once 'inc/footer.php';
        ?>
    </section> 
</body>
</html>
