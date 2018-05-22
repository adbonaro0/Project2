<?php
if (isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['company']. $_POST['date'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $date = $_POST['date'];
}
<?php
if (isset($_GET['firstName'], $_GET['lastName'], $_GET['email'], $_GET['company']. $_GET['date'])){
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $email = $_GET['email'];
    $company = $_GET['company'];
    $date = $_GET['date'];
}
<?php
if (isset($_DELETE['firstName'], $_DELETE['lastName'], $_DELETE['email'], $_DELETE['company']. $_DELETE['date'])){
    $firstName = $_DELETE['firstName'];
    $lastName = $_DELETE['lastName'];
    $email = $_DELETE['email'];
    $company = $_DELETE['company'];
    $date = $_DELETE['date'];
}
if (isset($_PUT['firstName'], $_PUT['lastName'], $_PUT['email'], $_PUT['company']. $_PUT['date'])){
    $firstName = $_PUT['firstName'];
    $lastName = $_PUT['lastName'];
    $email = $_PUT['email'];
    $company = $_PUT['company'];
    $date = $_PUT['date'];
?>
