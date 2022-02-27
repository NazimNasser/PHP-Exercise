<?php
for ($i=0; $i<7; $i++)
{
    for ($j=0; $j<=7; $j++)
	{
        if ((($i == 0 or $i == 6) and $j >= 0 and $j <= 6) or $i-$j==0)
            echo "*";    
        else  
            echo " ";     
	}        
    echo "\n";
}
?>