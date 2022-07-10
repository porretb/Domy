<?php
            //déclaration du tableau des recettes
            $recette = [['Pain au froment', 'Recette', 'Blaise',true],['Pain au levan', 'Recette', 'Domy',false]
        ];
    // Tableau associatif
    $recettes = [[
        'titre' => 'Petit Pain',
        'recette' => '100 gr de beurre etcc',
        'auteur' => 'Blaise',
        'actif' => true,

    ],
    [
        'titre' => 'Confiserie',
        'recette' => '99 gr de beurre etcc',
        'auteur' => 'Domy',
        'actif' => true,

    ],
    [
        'titre' => 'Chocolat',
        'recette' => '20 gr de beurre etcc',
        'auteur' => 'Blaise',
        'actif' => true,

    ],
    [
        'titre' => 'Patisserie',
        'recette' => '100 gr d\'huile etcc',
        'auteur' => 'Blaise',
        'actif' => true,

    ],
];    
?>
        

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Domy - recette du boulanger</title>
        <link rel="stylesheet" href="css.css">
    </head>
    <body>
        <?php 
            foreach ($recettes as $value){
                echo '<p>'.$value['titre'].':'.'<br />'.' contribué par : '.$value['auteur'].'<br />'.'recette : '.$value['recette'].'<br />'.'</p>'.PHP_EOL;
            }
        ?>
        <ul>
            <?php for ($line = 0; $line <= 1; $line++): ?>
                <li><?php echo $recette[$line][0].'('. $recette[$line][2].')';  ?></li>
            <?php endfor; ?>
        </ul>

    <?php
             $isEnabled = true; // La condition d'accès
             

            if ($isEnabled == true) {
            echo "Vous êtes autorisé(e) à accéder au site ✅";
            }
            else
            {
                echo 'Accès refusé ❌';
            }
        ?>
        <?php
            echo "<h1>Domy - recette du boulanger</h1>" 
        ?>
        <p>
            Bonjour <?php $nomdutilisateur = 'Blaise Porret';
            echo $nomdutilisateur; ?>
        </p>
        <p>
            Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>
        </p>
        <p>
            <?php
                $line = 1;
                while ($line <=10) {
                    echo 'Je dois dois copier openclassroom &nbsp' .$line. '<br/>';
                    $line++;
                }
            ?>
        </p>
        <?php
$lines = 3; // nombre d'utilisateurs dans le tableau
$counter = 0;
$user1 = ['Blaise Porret', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$user2 = ['Domy Aesch', 'mathieu.nebra@exemple.com', 'devine', 33];
$user3 = ['Sandrine Baudoit', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

$users = [$user1, $user2, $user3];


while ($counter < $lines) {
    echo $users[$counter][0] . ' ' . $users[$counter][1] . ' ' .$users[$counter][3].'<br />';
    $counter++; // Ne surtout pas oublier la condition de sortie !
}
    
?>
    </body>
</html>