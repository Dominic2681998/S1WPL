<!DOCTYPE html>
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
    </style>
    <script>
        	function validation()
		{
			            name=document.getElementById("txtname").value;
                        price=document.getElementById("txtprice").value;
                       quantity=document.getElementById("txtquantity").value;
			if(name=="")
			{
				window.alert("Please enter name");
				document.getElementById("txtname").focus();
				return false;
			}
            if(name!="")
                {
                    if(isNaN(name))
                    {}
                    else
                    {
                        window.alert("Name should contain only alphabets");
                          document.getElementById("txtname").focus();
                            return false;
                    }
                }  
                if(quantity=="")
			{
				window.alert("Please enter quantity");
				document.getElementById("txtquantity").focus();
				return false;
			}
            if(quantity!="")
                {
                    if(isNaN(quantity))
                    {
                        
                        window.alert("Name should contain only numbers");
                          document.getElementById("txtquantity").focus();
                            return false;
                    }
                    
                }  
                if(price=="")
			{
				window.alert("Please enter price");
				document.getElementById("txtprice").focus();
				return false;
			}
            if(price!="")
                {
                    if(isNaN(price))
                    {
                        window.alert("Name should contain only numbers");
                          document.getElementById("txtprice").focus();
                            return false;
                    }
                    
                }           
                          
           
                        
			return true;
		}
        </script>
</head>
<body class="bg"><center>
        <center><h1>New Bill</h1></center>
        <DIV CLASS="dd">
        
	<form action="billview.php" method="POST" onsubmit="return validation()">
    <table>
    
    
    <tr><th>  Item Name</th><td><select name="name" required>
            <option></option> 
            <option>Chicken Biriyani</option>
            <option>Veg Biriyani</option>
            <option>Other</option>
            </td></tr>
            <tr><th>  Type:</th><td><select name="type" required>
            <option></option> 
            <option>Vegetarian</option>
            <option>Non Vegetarian</option>
            <option>Other</option>
            </td></tr>
            <tr><th> Number of customers:</th><td><input type="text" name="quantity" id="txtquantity" ></td></tr>
            <tr><td><input type="submit" value="Submit" name="btn"></td><td> <input type="reset" value="Reset" name="display"></td></tr>
        </form></div></center>
</body>
</html>