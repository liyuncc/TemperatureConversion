
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
        echo '<p><a href="">Do another calculation</a></p>';
        
    }else{//show a form
        echo '
                  <form action="" method="post" name="TempCalc" id="tempCalcForm">
                  <>
                    </form>
        ';
    }
?>