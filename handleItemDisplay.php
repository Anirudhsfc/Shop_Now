<?php

include 'ChromePhp.php';

ChromePHP::log("inside handleITEM display");


$conn = mysqli_connect('sophia.cs.hku.hk', 'aagarwal', 'lkut1314') or die('Failed to Connect ' . mysqli_error($conn));

mysqli_select_db($conn, 'aagarwal') or die('Failed to Access DB' . mysqli_error($conn));
$page = $_GET['page'];
$value = $_GET['show'];

ChromePHP::log("value is".$value);
ChromePHP::log("page is ".$page);

    ChromePHP::log("query is being generated");
    $query = "select * from catalog where itemCategory='$value'";

    $query .= " order by itemName ASC";

ChromePHP::log("page is =" . $page);
ChromePHP::log("query is" . $query);
$result = mysqli_query($conn, $query) or die('Failed to query ' . mysqli_error($conn));
if($value=="Computers"){
    ChromePHP::log("Computers");
}
if($value=="Books"){
    ChromePHP::log("Books");
}
if($value=="Headphones"){
    ChromePHP::log("Headphones");
}
$itemArr = array ();


$k = 1;
while ($row = mysqli_fetch_array($result))
{
    // ChromePhp::log("row item id is=".$row['itemID']);
    // ChromePhp::log("row item name is=".$row['itemName']);
    // ChromePhp::log("row item price is=".$row['itemPrice']);
    // ChromePHP::log("inside while");
    if ($page == 1)
    {
        // ChromePHP::log("inside page 1");
        if ($k <= 3)
        {
            // ChromePHP::log("row item id is =" . $row['itemID']);
            $k = $k + 1;
            $itemArr[] = array ('itemImage' => $row['itemImage'], 'itemName' => $row['itemName'], 'itemPrice' => $row['itemPrice'], 'itemDescription' => $row['itemDescription'], 'button' => 'Add To Cart','itemID'=>$row['itemID']);

        }


    }

    if ($page == 2)
    {
        if ($k <= 6)
        {
            if ($k > 3)
            {
                
                $itemArr[] = array ('itemImage' => $row['itemImage'], 'itemName' => $row['itemName'], 'itemPrice' => $row['itemPrice'], 'itemDescription' => $row['itemDescription'], 'button' => 'Add To Cart','itemID'=>$row['itemID']);
            }
            $k = $k + 1;
        }
    }
    if ($page == 3)
    {

        ChromePhp::log("value of k=".$k);
        if ($k <= 9)
        {
            // ChromePhp::log("inside page 3 and inside k<=9");
            if ($k > 6)
            {
                ChromePhp::log("itemName=".$row['itemName']);
                ChromePhp::log("itemPrice=".$row['itemPrice']);
                ChromePhp::log("itemID=".$row['itemID']);
                
                // ChromePhp::log("inside page 3 and inside k>6");
                $itemArr[] = array ('itemImage' => $row['itemImage'], 'itemName' => $row['itemName'], 'itemPrice' => $row['itemPrice'], 'itemDescription' => $row['itemDescription'], 'button' => 'Add To Cart','itemID'=>$row['itemID']);
            }
            $k = $k + 1;
        }
    }
}

print json_encode($itemArr);





?>