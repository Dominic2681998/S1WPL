<?php
$con= mysqli_connect("localhost","root","","s1exam") or die("Couldn't connect to server". mysqli_connect_error());


   echo "<center><caption>Stock Details</caption>" ;
    $q1="select *from restaurant";
    $x=mysqli_query($con,$q1);
    if(mysqli_num_rows($x)>0)
    {
       echo "<table border='1'><tr><th>";
       echo "Name</th><th>Type</th><th>Quantity</th><th>Price</th></tr>";
       while($row=mysqli_fetch_array($x))
       {
           echo "<tr>";
           echo "<td>",$row['name'],"</td><td>",$row['type'],"</td><td>",$row['quantity'],"</td><td>",$row['price'],"</td></tr>";
           }
    }
    echo "</center>";
    
    mysqli_close($con);    
?>