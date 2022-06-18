<?php
    /* Write a program WindChill that takes two double command-line arguments t
and v and prints the wind chill.*/
class Windchill{
    function calcwindchill($t,$v)
    {
        if($t < 50.0 && ($v < 120.0 || $v > 3.0))
        {
            $windchill = 35.74+0.6215*$t+(0.4275*$t-35.75)*pow($v,0.16);
            echo "windchill is :",$windchill;
        }
        else
        {
            echo "Enter valid inputs";
        }
    }
}

/*taking temperature and windspeed as inputs from comand and calling windchill method through clss method*/
$objwc=new Windchill();
$t=$argv[1];
$v=$argv[2];
if(is_double($argv[1])&&is_double($argv[2]))
{
    $objwc->calcwindchill($argv[1],$argv[2]);
}
else{
    echo"Enter valid input";
}
?>