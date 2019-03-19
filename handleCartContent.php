<?php

session_start();

include 'ChromePhp.php';

$conn = mysqli_connect('sophia.cs.hku.hk', 'aagarwal', 'lkut1314') or die('Failed to Connect ' . mysqli_error($conn));

mysqli_select_db($conn, 'aagarwal') or die('Failed to Access DB' . mysqli_error($conn));

$itemArr=array();
foreach($_SESSION['shoppingCart'] as $key=>$value){
    ChromePhp::log("key is".$kye."value is" .$value);
    $numOfItems=$numOfItems+$value;
}
$counter=1;
foreach($_SESSION['shoppingCart'] as $key=>$value){

    // ChromePhp::log("key is".$key."value is".$value);
    $query = "select * from catalog where itemID='$key'";
    $result = mysqli_query($conn, $query) or die('Failed to query ' . mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    // ChromePhp::log("item ID in handle cart conetn=".$row['itemID']);
    $subtotalPrice=$row['itemPrice']*$value;
    $itemArr[] = array ('itemImage' => $row['itemImage'], 'itemName' => $row['itemName'], 'itemPrice' => $row['itemPrice'], 'itemDescription' => $row['itemDescription'],'itemQuantity'=>$value,'numOfItems'=>$numOfItems,'itemID'=>$row['itemID'],'subtotalPrice'=>$subtotalPrice);
    
    $counter=$counter+1;
    

}
// ChromePhp::log("ARRAY IS");
// ChromePhp::log(json_encode($itemArr));
print json_encode($itemArr);
















?>