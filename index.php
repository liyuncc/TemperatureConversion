<html>
<title>Temperature Converter</title>

<body>
    <h2 align="center">Temperature Converter</h2>
	<p align="center">Select a unit from drop down list, type a value in the field, and click the convert button</p>
	
	<!-- Show error message -->
	<?php 	
	    session_start();
	    if (isset($_SESSION['error_msg'])) {
              echo '<p align="center" style="color:red;">' . $_SESSION['error_msg'] . '</p>';
              unset( $_SESSION['error_msg']);
        }
	?>
    
	<form action="convert.php" method="post">
		<div style="text-align:center;">
			<div style="display:inline;"><input type="text" name="inputValue" placeholder="e.g. 32" size="12" style="height:22px;display:inline;"></div>

			<div style="display:inline;">
				<select name="inputType" style="height:22px;">
				<option value="fahrenheit">Fahrenheit</option>
				<option value="celsius">Celsius</option>
				<option value="kelvin">Kelvin</option>		
				</select>
			</div> 

		   <div style="display:inline;"> <input type="submit" value="Convert"></div>
		   		   
		   <!-- Display two converted degrees below -->
		   <?php 		    
		       if (isset($_SESSION['output1'])) {
                  echo '<p align="center"><b>' . $_SESSION['output1'] . '</b></p>'; 
				  unset( $_SESSION['output1']);
			   }
			
			   if (isset($_SESSION['output2'])) {
                  echo '<p align="center"><b>' . $_SESSION['output2'] . '</b></p>';  
				  unset( $_SESSION['output2']);
			   }
		   ?>		   		   
		</div>		 	                        
	</form>
</body>
</html>