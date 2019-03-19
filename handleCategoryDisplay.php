<?php



$conn = mysqli_connect('sophia.cs.hku.hk', 'aagarwal', 'lkut1314') or die('Failed to Connect ' . mysqli_error($conn));

mysqli_select_db($conn, 'aagarwal') or die('Failed to Access DB' . mysqli_error($conn));

if($_GET['show']=="category"){

    $query='select DISTINCT itemCategory from catalog order by itemCategory ASC';

}

$result = mysqli_query($conn, $query) or die ('Failed to query '.mysqli_error($conn));

$categoryArr=array();

while($row=mysqli_fetch_array($result)){
    $categoryArr[]=array('itemCategory'=>$row['itemCategory']);

}
print json_encode($categoryArr);









?>