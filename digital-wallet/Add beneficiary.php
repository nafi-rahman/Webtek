<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add beneficiary</title>
</head>

<body>
   <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <h1>Page 2 [Add beneficiary]</h1>
        
        <p>Digital Wallet</p>
        <a href="home.php" > 1. Home</a>
		<a href="Add beneficiary.php" > 2. Add beneficiary</a>
		<a href="Transaction.php" > 3. Transaction</a>
        
		<p>Add beneficiary: </p>
		
		<br>
		<br>
		Beneficiary name: <input type="text" name="name"> Mobile: <input type="tel" name="mob">
		<br>
		<br>
		<input type="submit" name="submit" value="Register">
		
		<table>
		<?php
			if ($_SERVER['REQUEST_METHOD'] === "POST") {
			echo "<table border='1'>";	
			echo "<tr>";
			echo "<th>";
			echo "name";
			echo "</th>";
			echo "<th>";
			echo "mobile";
			echo "</th>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>";
			echo $_POST['name'];
			echo "</td>";
			echo "<td>";
			echo $_POST['mob'];
			echo "</td>";
			echo "</tr>";
 			echo "</table>";
			}
			?>
		</table>
		
    </form>
    <?php 

        if ($_SERVER['REQUEST_METHOD'] === "POST") {

           $name = $_POST['name'];
           $mobile = $_POST['mob'];
           

            $isValid = false;

            if (empty($name) or empty($mob) ) {
            	$isValid = false;
                echo "form isn't filled up properly";
            }
            else {
                $isValid = true;
            }
            if ($isValid) { 
            $handle1 = fopen("benifi.json", "a");

            $arr = array('category' => $cat, 'to' => $to, 
                'amount'=> $amount);
            
            $encode = json_encode($arr);

            $res = fwrite($handle1, $encode . "\n");
            if ($res) {
                   echo "File Saved  "; }
             else {
                echo " Error  ";
             }
        }
       
    
        }

    ?>
</body>

</html>