
 
<html>
<head><title>Random</title></head>
<body style="background-color: black;color: yellow;">
<center>
     <h1>
        Faactorial of  Number
    </h1>
     
    <form method="post" >
        <table border="0">
            <tr>
                <td> <input type="text" name="num1" placeholder="Enter the number"/>
                </td>
            </tr>
            <tr>
                <td> <input type="submit" name="submit"
                    value="Submit"/>
                </td>
            </tr>
        </table>
    </form>

 
<?php
function fact($n)
{
  if($n ==0)
    {
       return 1;
    }
  else 
    {   
       return $n * fact($n-1);
    }
    }
     if($_POST)  
    {   
        $num = $_POST['num1'];
        if($num<0){
            echo 'Please enter a positive number';
        }
        else{
        echo "<h3>Factorial of $num number: </h3>";  
echo (fact($num));
}
}

?>
</center>
</body>
</html>



</center>
</body>
</html>


