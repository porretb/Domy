<?php
function isValidatRecipe(array $recipe) : bool
{
    if (array_key_exists('active', $recipe))
    {
        $active = $recipe['active'];
    }
    else
    {
        $active = false;
    }
    return $active;
}

function afficheAuteur(string $auteurEmail, array $user) : string
{
    for($i = 0; $i < count($user); $i++)
    {
        $auteur = $user[$i];
        if ($auteurEmail === $auteur['email'])
        {
            return $auteur['nom'] . '(' . $auteur['age'] . 'ans)';
        }
    }
}

function getRecette(array $recipes) : array
{
    $validRecipes = [];

    foreach($recipes as $recipe)
    {
        if (isValidatRecipe($recipe))
        {
            $validRecipes[] = $recipe;
        }
    }
    return $validRecipes;
}
?>