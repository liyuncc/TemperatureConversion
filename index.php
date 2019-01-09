<?php include 'includes/header.php'?>
<?php        
    if(isset($_POST["inputValue"]))
    {//data is submitted show it
       // echo $_POST['FirstName'];
        /*
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
        die;
        */
       $inputTemp=$_POST["inputValue"];
        switch($_POST["inputType"]){
            case 'celsius':
                $fahrenheit=$inputTemp*9/5+32;
                $kelvin=$inputTemp+273.15;
                echo '<p>' . $fahrenheit . '<BR />'; 
                echo '<p>' . $kelvin . '<BR />'; 
                echo '<p><a href="">Do another calculation</a></p>';
                break;
            case 'fahrenheit':
                $celsius=5/9*($inputTemp-32);
                $kelvin=fahrenheit_to_celsius($inputTemp) + 273.15;
                break;
            case 'kelvin':
                $fahrenheit=9/5*($inputTemp-273.15)+32;
                $celsius=$inputTemp-273.15;
                break;    
            default:
                echo '<p>Fatal Error</p>';
                die();
        }
   }else{//show a form
        echo '
                <form action="" method="post" name="TempCalc" id="tempCalcForm">
                     Convert from temperature: <input type="text" name="inputValue" /><br />
                     Input value type?<br />
                    <input type="radio" name="inputType" value="fahrenheit" />Fahrenheit<br />
                    <input type="radio" name="inputType" value="celsius" />Celsius<br />
                    <input type="radio" name="inputType" value="kelvin" />Kelvin<br />
                    <input type ="submit" />  
                </form>';
    }
?>
<?php include 'includes/footer.php'?>
