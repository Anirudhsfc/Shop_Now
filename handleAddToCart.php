<?php

    

session_start();
include 'ChromePhp.php';

// ChromePhp::log("inside handle add to cart");


$itemID=$_GET['itemID'];
$updateNumber=$_GET['updateNumber'];

$removeElem=$_GET['removeElem'];
ChromePhp::log("element removed id".$removeElem);





ChromePhp::log("item id =".$itemID);
ChromePhp::log("update number  =".$updateNumber);

if(!isset($_SESSION['shoppingCart'])){
    ChromePHP::log("setting session to new array");
    $_SESSION['shoppingCart']=array();
}else{
    foreach($_SESSION['shoppingCart'] as $key=>$value){
        ChromePhp::log("key is".$key."value is".$value);
        // ChromePHP::log("inside for each of else of session set already ");
        if($key==$itemID){
            $value=$value+$updateNumber;
            ChromePhp::log("value updates =".$value);
            $_SESSION['shoppingCart'][$itemID] = $value;
            $flag=1;
            break;
        }else{
            $flag=0;
        }
        
    }
    ChromePhp::log("flag is=".$flag);
    if($flag==0 && $itemID!=-1 && $itemID!=0){
        $_SESSION['shoppingCart'][$itemID] = $updateNumber;
    }
    
}
$numOfItems=0;
ChromePhp::log("FINAL KEY VALUES IN SESSION");
// ChromePhp::log("num of items befroe for each =".$numOfItems);

if($removeElem==-1){
    ChromePhp::log("unsetting");
    unset($_SESSION['shoppingCart'][$itemID]);
}
foreach($_SESSION['shoppingCart'] as $key=>$value){
    // ChromePhp::log("inside for each ");
    
    ChromePhp::log("key is".$key."value is".$value);
$numOfItems=$numOfItems+$value;
}
if($itemID==-1){
    session_unset();
    session_destroy();
    

}
// ChromePhp::log("num of items that are returned is=".$numOfItems);
print json_encode($numOfItems,JSON_NUMERIC_CHECK);


//upar wala sahi hai

// $_SESSION['$itemID']=$updateNumber;
// ChromePhp::log("inside handle add to cart");
// ChromePhp::log("itemID ="+$itemID);
// ChromePhp::log("update number ="+$updateNumber);
// ChromePhp::log("session value ="+$_SESSION['$itemID']);
// if(isset($_SESSION["$itemID"])){
//     ChromePhp::log("inside isset i.e. the value is already there ");
//     $_SESSION['itemID']=$_SESSION['$itemID']+$updateNumber;
// }else{
//     ChromePhp::log("inside else of isset i.e. the value is not there ");

// $_SESSION['$itemID']=$updateNumber;
// }
// ChromePhp::log("session value after updating is ="+$_SESSION['$itemID']);
// $numOfItems=0;
// foreach($_SESSION as $name=>$value){
//     ChromePhp::log("inside eforeach of session ");
//     $numOfItems=$numOfItems+$_SESSION['$itemID'];
// }

// print json_encode($numOfItems);

// session_unset();
// session_destroy();








?>