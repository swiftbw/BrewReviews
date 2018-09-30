 <?php
  if($_POST['submit'] == "Submit")
  {
    $brewname = $_POST['brewname'];
  }
?>

<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html> <head>
<title></title>
</head>

<body>
<h1>
Testing 123
</h1>
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
Submit:      <input type="submit"
</form>
<hr>
<address></address>
<!-- hhmts start -->Last modified: Sun Sep 30 14:31:08 CDT 2018 <!-- hhmts end -->
</body> </html>