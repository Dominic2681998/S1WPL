<?php

$con = new mysqli("localhost", "root","") or die("Coudn't connect to server".mysqli.error());
$cr="create database s1exam";
$x=mysqli_query($con,$cr);
if($x>0)
    {
       echo "Database Succesfully created";
    }
else
    {
    echo "Database creation failed";
    
    }
mysqli_close($con);
$con = new mysqli("localhost", "root","","s1exam") or die("Coudn't connect to server".mysqli.error());

    $t="create table restaurant(itemnum int not null auto_increment,name varchar(25) not null,
    type varchar(25) not null,quantity int ,price bigint not null,primary key(itemnum))";
    $q=mysqli_query($con,$t);
    if($q>0)
    {
        echo "Successful creation table";
    }
    else
    {
        echo "Table creation failed";    
    }
    $t="create table food(foodnum int not null auto_increment,name varchar(25) not null,
    type varchar(25) not null,quantity int ,price bigint not null,primary key(foodnum))";
    $q=mysqli_query($con,$t);
    if($q>0)
    {
        echo "Successful creation table";
    }
    else
    {
        echo "Table creation failed";    
    }

?>

