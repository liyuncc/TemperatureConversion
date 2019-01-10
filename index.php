<?php
    if(isset($_POST['inputValue']))
    {//data is submitted show it
       // echo $_POST['FirstName'];
        /*
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
        die;
        */
       $inputTemp=$_POST[inputValue]
    switch $inputType:
        case 'celsius':
            $fahrenheit=$inputTemp*9/5+32;
            $kelvin=$inputTemp+273.15;
        echo $fahrenheit break; echo $kelvin break; 
            break;
        case 'fahrenheit':
            $celsius=5/9*($inputTemp-32);
            $kelvin=fahrenheit_to_celsius($inputTemp) + 273.15;
        echo $celcius break; echo $kelvin break;
            break;
        case 'kelvin':
            $fahrenheit=9/5*($inputTemp-273.15)+32;
            $celsius=$inputTemp-273.15;
        echo $fahrenheit break; echo celsius break;
            break;
    
        default:
            code to be executed if n is different from all labels;
    }
        echo '<p><a href="">Do another calculation</a></p>';
        
    }else{//show a form
        echo '
                  <form action="" method="post" name="TempCalc" id="tempCalcForm">
                  <>
                    </form>
        ';
    }
?>


