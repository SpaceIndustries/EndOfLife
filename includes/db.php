<?php
try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $username = "root"; //DB USERNAME
    $password = ""; //DB PASSWORD

    $cnx = new PDO('mysql:host=127.0.0.1;dbname=endoflife', $username, $password, $pdo_options);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}