<?php

// submit_contact.php
if (!isset($_POST['email']) || !isset($_POST['message']))
{
	echo('Il faut un email et un message pour soumettre le formulaire.');
    return;
}

$email = $_POST['email'];
$message = $_POST['message'];
$nomfichier = $_FILES['screenshot']['name'];;

?>
<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['screenshot']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $fileInfo = pathinfo($_FILES['screenshot']['name']);
                $extension = $fileInfo['extension'];
                $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                if (in_array($extension, $allowedExtensions))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' . basename($_FILES['screenshot']['name']));
                        echo "L'envoi a bien été effectué";
                }
        }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css.scss">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Paytone One">
        <title>Site de Recettes - Demande de contact reçue</title>
    </head>
    <body>¨
        <header>
            <?php
                include('header.php');
            ?>
        </header>
        <section id="main">    
            <h1>Message bien reçu !</h1>
            <h5 class="card-title">Rappel de vos informations</h5>
            <p class="card-text"><b>Email</b> : <?php echo($email); ?></p>
            <p class="card-text"><b>Message</b> : <?php echo strip_tags($message); ?></p>
        </section>
        <footer>
            <?php
                include('footer.php');
            ?>  
        </footer>  
    </body>
</html>