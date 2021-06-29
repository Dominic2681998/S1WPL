<html>
<head>
<style>
        .bg
        {
            background-color: #f2f2f2;
        }
        .dd
        {
            margin-top:10px;
            width:40%;
            border:1px;
            padding:50px;
            background-color:antiquewhite;
            font-family:sans-serif;
            font-style:italic;
            font-size:20px;
            
        }
        table
        {
            border-collapse:collapse;
            
        }
    </style>
</head>
<?php
$con= mysqli_connect("localhost","root","","s1exam") or die("Couldn't connect to server". mysqli_connect_error());
$name=$_POST['name'];
$type=$_POST['type'];
$quantity=$_POST['quantity'];

$qw="update food set(quantity=quantity-1) where name=$name and type=$type";
mysqli_query($con,$qw);
$q="select price from food where name=$name and type=$type";
$p=mysqli_query($con,$q);

    
    $total=$p*$quantity;
      ?><center>
           <table border='1'>
            <tr><td>Name</td><td><?php echo $name; ?></td>
            <tr><td>Type</td><td><?php echo $type; ?></td>
            <tr><td>Number of customers</td><td><?php echo $quantity; ?></td>
            <tr><td>Price</td><td><?php echo $total; ?></td>
            <?php


    mysqli_close($con);    
?>