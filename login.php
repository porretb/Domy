             <?php
                //validation du formulaire
                if (isset($_POST['email']) && isset($_POST['password']))
                {
                    foreach ($user as $user)
                    {
                        if ($user['email'] === $_POST['email'] && $user['password'] === $_POST['password'])
                        {
                            $_SESSION['loggedUser'] = $user['email'];
                            // ancienne version $loggedUser = ['email' => $user['email'],];
                        }
                        else
                        {
                            $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)', $_POST['email'], $_POST['password']);
                        }
                    }
                }
            ?>
            <?php
                //affichage du formulaire de login
                if(!isset($_SESSION['loggedUser'])):
                // ancienne version if(!isset($loggedUser)):
            ?>
            <form action="home.php" method="POST">
                <?php
                    //si message d'erreur alors on l'affiche
                    if(isset($errorMessage)):
                ?>
                <div>
                    <?php echo $errorMessage; ?>
                </div>
                <?php endif; ?>
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" aria-describedby="email-help" placeholder="johndoe@yahoo.fr">
                    <div id="email-help">
                        L'email utilisé lors de la création de compte.
                    </div>
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                <button type="submit">Envoyer</button>
            </form>
            <?php else: ?>
                <div>
                    Bonjour <?php echo $_SESSION['loggedUser'];?> et bienvenue sur le site du boulanger !
                </div>
            <?php endif; ?>