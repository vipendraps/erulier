<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbConnect
 *
 * @author vipendra
 */
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbDatabase = "erulier";
// Connect to the Database Server
$db = mysql_connect("$dbHost", "$dbUser", "$dbPass") or die("Error: Could not connect to the Database Server!!".  mysql_error());
// Connect to the Database
mysql_select_db("$dbDatabase", $db) or die("Error: Could not connect to the Database!!".  mysql_error());
