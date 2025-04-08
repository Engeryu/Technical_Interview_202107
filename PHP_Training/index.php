<?php
/**
 * @Author: Engeryu
 * @Date:   2021-07-01 14:18:51
 * @Last Modified by:   Engeryu
 * @Last Modified time: 2025-04-06 23:13:42
 */
?>
<?php include("includes/menus.php"); ?> 
<?php include("includes/pointers_and_Array.php"); ?>
<h1>Pokédex</h1>
<?php
    $e = "Ce pokémon est évolutif";
    $n = "Ce pokémon ne peut évoluer";
        
    $elementTab = array(
    'feu' => array(
        'Salamèche' => array(
            'Upgrade'=> $e,
            'Numéro' => '1'),
        'Sulfura' => array(
            'Upgrade' => $n,
            'Numéro' => '2'),
        'Pyroli' => array(
            'Upgrade' => $e,
            'Numéro' => '3'),
    ),
    'l\'eau' => array(
        'Carapuce' => array(
            'Upgrade'=> $e,
            'Numéro' => '4'),
        'Krabby' => array(
            'Upgrade' => $e,
            'Numéro' => '5'),
        'Léviator' => array(
            'Upgrade' => $n,
            'Numéro' => '6'),
        )
    );
    foreach($elementTab as $name => $pokemons){
        echo'<h3>Elément de '. $name .'</h3>';

        echo '<ul>';
        foreach($pokemons as $name => $index){
            echo '<li>'. $name .'</li>';
            foreach($index as $nomCarac => $contains){
                echo $nomCarac. ': '. $contains .'<br />';
            }
        }
        echo '</ul>';
    }
?>