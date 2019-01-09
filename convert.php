<?php
    session_start(); // Here using session (session_start() and $_SESSION[]) to send data back to index.php
    if (empty($_POST['inputValue'])) {			
		$_SESSION['error_msg'] = "Input value should not be empty."; // Add error message to session					
	} else if (!is_numeric($_POST['inputValue'])) {
        $_SESSION['error_msg'] = "Input value should be valid number."; // Add error message to session  			
    } else {
		// echo $_POST['FirstName'];
        /*
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
        die;
        */	
		
		$inputType = $_POST['inputType'];
		$inputValue = $_POST['inputValue'];			
        switch ($inputType) {
			case 'celsius':
				$fahrenheit=$inputValue*9/5+32;
				$kelvin=$inputValue+273.15;
	            // echo $fahrenheit break; 
			    // echo $kelvin break; 	
				
				// Add two converted degrees to session.
				$_SESSION['output1'] = "The fahrenheit degree is " . $fahrenheit;	
				$_SESSION['output2'] = "The kelvin degree is " . $kelvin;
				break;
			case 'fahrenheit':
				$celsius=5/9*((float)$inputValue-32);
				$kelvin=((float)$inputValue) + 273.15;
	            // echo $celcius break; 
			    // echo $kelvin break;
				
				// Add two converted degrees to session.
				$_SESSION['output1'] = "The celsius degree is " . $celsius;	
				$_SESSION['output2'] = "The kelvin degree is " . $kelvin;
				break;
			case 'kelvin':
				$fahrenheit=9/5*($inputValue-273.15)+32;
				$celsius=$inputValue-273.15;
	            // echo $fahrenheit break; 
			    // echo celsius break;
				
				// Add two converted degrees to session.
				$_SESSION['output1'] = "The fahrenheit degree is " . $fahrenheit;	
				$_SESSION['output2'] = "The celsius degree is " . $celsius;
				break;

			default:
				// code to be executed if n is different from all labels;
				// Free the output1 and output2 keys in session.
				if (isset($_SESSION['output1'])) {
					unset( $_SESSION['output1']);					
				}	
				
				if (isset($_SESSION['output2'])) {
					unset( $_SESSION['output2']);					
				}
        }		
    }

    // Redirect to index.php. You can change the URL to yours.
    header("Location: http://0312.hengit.ga/index.php");
	exit();
?>


