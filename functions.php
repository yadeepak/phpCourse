<?php

function switchUser($user,$roll)
{
    switch ($user) {
        case 'abc':
            echo 'first case true '.$roll;
            break;
        case 'xyz':
            echo 'second case true';
            break;
        case 'abcd':
            echo 'third case true';
            break;
            default:
            echo "no case found";
    }
}


//switchUser('abc','sd','sjbfb');

//echo date('Y/m/d');

//echo hash('md5','deepak');

//echo str_replace('sunday','monday','its sunday');
// echo strpos('its sunday','s');

// $name="Deepak yadav abc";
// $arrayName=explode(' ',$name);
// print_r($arrayName);
// $stringOfNames = implode(' ' ,$arrayName);
// echo $stringOfNames;