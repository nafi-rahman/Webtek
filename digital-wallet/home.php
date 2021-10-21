
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home</title>
</head>

<body>


	<?php
		
		$am = 0;
		$request_method = $_SERVER['REQUEST_METHOD'];
		if ($request_method === 'POST'){
			$am = $_POST['amount'];
		}
	?>

    <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <h1>Page 1 [Home]</h1>
        
        <p>Digital Wallet</p>
        <a href="home.php" > 1. Home</a>
		<a href="Add beneficiary.php" > 2. Add beneficiary</a>
		<a href="Transaction.php" > 3. Transaction</a>
        
		<p>Fund Transfer: </p>
		
		Select Category:
		<select name="cat">
		<option value="C1">Send Money</option>
		<option value="C2">Mobile Recharge</option>
		
		</select>


		
		<br>
		<br>
		
		To:
		<select name="to">
		<option value="T1">TO 1</option>
		<option value="T2">TO 2</option>
		<option value="T3">TO 3</option>
		</select>
		
		<br>
		<br>
		Amount: <input type="number_format" name="amount" >
		<br>
		<br>
		<input type="submit" name="submit" value="submit">
    	
    	

    </form>

    <?php 

        if ($_SERVER['REQUEST_METHOD'] === "POST") {

           $cat = $_POST['cat'];
           $to = $_POST['to'];
           $amount = $_POST['amount'];

            $isValid = false;

            if (empty($amount) or $cat == "select" or $to ==
                "select" ) {
            	$isValid = false;
                echo "form isn't filled up properly";
            }
            else {
                $isValid = true;
            }
            if ($isValid) { 
            $handle1 = fopen("transH.json", "a");

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