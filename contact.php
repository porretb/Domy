<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>
            Domy - Les recettes du boulanger - Contact
        </title>
        <link rel="stylesheet" href="css.scss">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Paytone One">
    </head>
    <header>
        <?php
            include_once('header.php');
            include_once('fonctions.php');
            include_once('variables.php');
        ?>
    </header>
    <body>
        <h1>
            Contactez nous
        </h1>
        <form>
            <label for="email">
                Email
            </label>
            <input type="email" id="email" name="email" placeholder="johndoe@yahoo.fr" aria-describedby="email-help">
            <div id="email-help">
                Nous ne revendrons pas votre email
            </div>
            <label for="message">
                Votre message
            </label>
            <textarea placeholder="Exprimez vous ici" id="message" name="textarea">
            </textarea>
            <button type="submit">
                Envoyer
            </button>
        </form>
    </body>
    <footer>
        <?php
            include_once('footer.php')
        ?>
    </footer>
</html>