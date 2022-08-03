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
            <h1>Domy</h1>
            <?php 
                include('header.php'); 
                include('variables.php'); 
                include('fonction.php'); 
            ?>
        </header>

        <section id="recette">
            <?php foreach(getRecette($recipes) as $recipe) : ?>
                <article>
                    <h3>
                        <?php echo $recipe['titre_recette']; ?>
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