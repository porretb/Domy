<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Domy - recette du boulanger</title>
        <link rel="stylesheet" href="css.css">
    </head>
    <body>
        <?php 
            include('header.php'); 
            include('variables.php'); 
            include('fonction.php'); 
        ?>
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
        <?php include('footer.php'); ?>  
    </body>
</html>