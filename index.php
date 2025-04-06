<?php
/**
 * @Author: Engeryu
 * @Date:   2021-07-01 14:18:39
 * @Last Modified by:   Engeryu
 * @Last Modified time: 2025-04-06 23:12:37
 */

 ob_start();
$titre = "Liste frais de livraisons";
?>
<?php
$dsn = 'mysql:dbname=didactopresta2018;host=localhost';
$user = 'root';
$password = '';

try{
	$pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'connexion échouée : ' . $e->getMessage();}


$sqlQuery = 'SELECT `shipping_cost_tax_excl` FROM `ps_order_carrier` WHERE `shipping_cost_tax_excl` != 0 AND `date_add` BETWEEN \'2020-01-01 00:00:00.000000\' AND \'2020-12-31 23:59:59.999999\' ORDER BY `shipping_cost_tax_incl` ASC';
$stmt = $pdo->prepare($sqlQuery);
$stmt->execute();
$orders_carrier = $stmt->fetchAll();


foreach ($orders_carrier as $data) {
    var_dump($data);
}
//  $ship_Carrier = array(
//     'YYYY/MM/DD' => array(  
//         'GLS' => array(
//             'Commandes livrées :' => array(
//             'Total des commandes' => $ship_Carrier['name'],
//             'Frais de livraison Collectées' => 'Prix de revenu'
//             ),
//         ),
//     ),
// );
// foreach($ship_Carrier as $name => $date){
//     echo'<input id="date" type="date" value="2020-01-01">'. $name . '<br />';
//     echo '<ul>';
//     foreach($date as $name => $ship){
//         echo'<li>Commandes :'. $name . '</li><br />';
//         foreach($ship as $name => $index){
//             echo '<li>' . $name . '<br />';
//             foreach($index as $results => $nbr){
//                 echo'<li>' . $results . $nbr;
//             }
//          }
//     }
// }
?>
