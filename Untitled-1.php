<?php

$product =$_REQUEST['product'];
$price =$_REQUEST['price'];


if(isset($_POST['btntest']))
{

    $host="localhost";
    $user ="root";
    $password="";
    $db="listmenu";


    $conn =mysqli_connect($host,$user,$password,$db);

    $insert="insert into listmenu values('$product','$price')";

    myqli_query($conn,$insert);

    if($conn){

        echo("<h1 style= 'color:black;'>your Registration is Done!</h1> ")
    }
    else{
        
        echo("<h1 style= 'color:red;'>your Registration is faild!</h1> ")

    }


}




?>