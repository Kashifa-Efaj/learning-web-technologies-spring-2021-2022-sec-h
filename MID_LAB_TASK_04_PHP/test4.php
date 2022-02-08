<?php
 function largest($num1,$num2,$num3)
{
        if($num1>$num2 && $num1>$num3)
        {
         echo "num1 is largest" ;
        }
        if ($num2>$num1 && $num2> $num3) 
                {
                echo "num2 is largest" ;
               }
                
        if($num3>$num1 && $num3> $num2)
                {
                echo "num3 is largest" ;  
                }
    }   
  largest(3,7,5);
 
?>