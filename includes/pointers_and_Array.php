<!--
  @Author: Engeryu
  @Date:   2021-07-01 14:21:37
  @Last Modified by:   Engeryu
  @Last Modified time: 2025-04-06 23:15:23
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <h1>Pokédex</h1>
        <?php

        $e = "Ce pokémon est évolutif";
        $n = "Ce pokémon ne peut évoluer";
        
     $pokemons = array(
        'feu' => array(
                'Name' => 'Salamèche', 'Upgrade'=> ''. $e, 'Numéro' => '1',
                'Name' => 'Sulfura', 'Upgrade' => ''. $n , 'Numéro' => '2',
                'Name' => 'Pyroli', 'Upgrade' => ''. $e, 'Numéro' => '3'
       ),
        'eau' => array(
                'Name' => 'Carapuce', 'Upgrade'=> ''. $e, 'Numéro' => '4',
                'Name' => 'Krabby', 'Upgrade' => ''. $e, 'Numéro' => '5',
                'Name' => 'Léviator', 'Upgrade' => ''. $n, 'Numéro' => '6',)
        );
            foreach($pokemons as $type => $carac){
                echo '<h3>'.'Pokémon ' . ($type) . '</h3> ';
                foreach ($carac as $c => $v){
                    echo $c. '°' .$v. '<br>';
                }
                echo '<br>';
            }
        ?>
    </body>
</html>