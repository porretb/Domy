<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <body>
        <head>
            <meta charset="utf-8">
            <title>Domy - recette du boulanger</title>
            <link rel="stylesheet" href="css.scss">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Paytone One">
        </head>
        <header>
            <?php 
                include_once('header.php'); 
                include_once('variables.php'); 
                include_once('fonction.php'); 
            ?>
        </header>
        <section id="main">
           <?php include_once('login.php') ?>
           <h1>Site de recettes</h1>
            <?php if(isset($_SESSION['loggedUser'])): ?>
                <?php foreach(getRecette($recipes) as $recipe) : ?>
                    <article>
                        <h3><?php echo $recipe['titre']; ?></h3>
                        <div><?php echo $recipe['ingredients']; ?></div>
                        <i><?php echo $recipe['auteur']; ?></i>
                    </article>
                <?php endforeach ?>
            <?php endif ?>
        </section>
        <footer>
            <?php include_once('footer.php'); ?>
        </footer>
    </body>
</html>