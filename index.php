<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Domy - recette du boulanger</title>
        <link rel="stylesheet" href="css.scss">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Paytone One">
    </head>
    <body>

        <header>
            <?php 
                include_once('header.php'); 
                include_once('variables.php'); 
                include_once('fonction.php'); 
            ?>
        </header>

        <section id="main">
            <?php foreach(getRecette($recipes) as $recipe) : ?>
                <article>
                    <h3>
                        <?php echo $recipe['titre']; ?>
                    </h3>
                    <div>
                        <?php echo $recipe['ingredients']?>
                    </div>
                    <i>
                        <?php echo afficheAuteur($recipe['auteur'], $user);?>
                    </i>
                </article>
            <?php endforeach ?>
        </section>

        <footer>
            <?php include('footer.php'); ?>
        </footer>  

    </body>
</html>