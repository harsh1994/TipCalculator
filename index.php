<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
body{
	background-color: brown;
}
#Main{
padding: 2px;
border: 1px solid;
width:300px;
background-color: white;
}
#res{
padding: 2px;
border: 1px solid;
width:200px;
background-color: white;
}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
$subtotal=$tip=$tip_radio=0;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["subtotal"])) 
  {
    // $nameErr = "subtotal is required";
  } 
  else 
  {
    $subtotal = ($_POST["subtotal"]);
  }

  $tip_radio = $_POST["tip"];

}
?>
<div id="Main">
<h2>Tip Calculator</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Bill subtotal: <input type="text" name="subtotal" value="<?php echo $subtotal ?>">
  <br><br>
  Tip percentage:
  <input type="radio" checked="checked" name="tip" value="10" required>10
  <input type="radio" name="tip" value="15">15
  <input type="radio" name="tip" value="20">20
  <br><br>
  <input type="submit" name="submit" value="Calculate"/>  
  <br>
  <br>
</form>
<div id="res">
<?php
if($subtotal>0){
echo "Tip              ";
// echo "<br>";
if($subtotal>0)
	echo $subtotal*$tip_radio*0.01;
echo "<br>";
echo "<br>";
echo "Total           ";
// echo "<br>";
if($subtotal>0)
	echo $subtotal+($subtotal*$tip_radio*0.01);}
?>
</div>
</div>

</body>
</html>