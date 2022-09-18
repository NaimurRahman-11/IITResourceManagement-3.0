<?php
session_start();
$itemRequestArray=array();
$itemQuantityArray=array();

if(isset($_POST['penQuantitybox']))
{
    array_push($itemRequestArray,'pen');
    array_push($itemQuantityArray,$_POST['penQuantitybox']);
}
if(isset($_POST['markerQuantitybox']))
{
    array_push($itemRequestArray,'marker');
    array_push($itemQuantityArray,$_POST['markerQuantitybox']);
}
if(isset($_POST['A4PaperQuantitybox']))
{
    array_push($itemRequestArray,'A4 Paper');
    array_push($itemQuantityArray,$_POST['A4PaperQuantitybox']);
}
if(isset($_POST['tissueQuantitybox']))
{
    array_push($itemRequestArray,'tissue box');
    array_push($itemQuantityArray,$_POST['tissueQuantitybox']);
}
if(isset($_POST['airFreshnerQuantitybox']))
{
    array_push($itemRequestArray,'Air Freshner');
    array_push($itemQuantityArray,$_POST['airFreshnerQuantitybox']);
}

$_SESSION['itemRequestArray']=$itemRequestArray;
$_SESSION['itemQuantityArray']=$itemQuantityArray;

//include('validateItemRequest.php');

?>