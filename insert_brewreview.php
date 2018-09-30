<?php
if($_POST['submit'] == "Submit")
{
	$errorMessage = "";
	inputs = array("reviewdate", "brewname", "brewery", "venue", "vessel", "color", "mouthfeel", "taste", "aroma", "comment", "overall");

	for ( $array as $item ) {
	if(empty($_POST[$item]))
	{
		$errorMessage .= "<li>You forgot to enter " . $item . "!</li>";
	}
	
	$varMovie = $_POST['formMovie'];
	$varName = $_POST['formName'];

	if(empty($errorMessage)) 
	{
		$fs = fopen("mydata.csv","a");
		fwrite($fs,$varName . ", " . $varMovie . "\n");
		fclose($fs);
		
		header("Location: thankyou.html");
		exit;
	}
}

<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html> <head>
<title></title>
</head>

<body>
<h1>
Testing 123
</h1>
	<?php
		if(!empty($errorMessage)) 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
	?>

<form action="insert_brewreview.php" method="post">
Review Date: <input type="date" name="reviewdate"><br>
Brew Name:   <input type="text" name="brewname"><br>
Brewery:     <input type="text" name="brewery"><br>
Venue:       <input type="text" name="venue"><br>
Vessel:      <input type="text" name="vessel"><br>
Color:       <input type="date" name="color"><br>
Mouth Feel:  <input type="date" name="mouthfeel"><br>
Taste:       <input type="date" name="taste"><br>
Aroma:       <input type="text" name="aroma"><br>
Comments:    <input type="text" name="comment"><br>
Overall:     <input type="number" name="overall"><br>
Submit:      <input type="submit" name="submit" value="Submit"><br>
</form>
<hr>
<address></address>
<!-- hhmts start -->Last modified: Sun Sep 30 14:31:08 CDT 2018 <!-- hhmts end -->
</body> </html>




