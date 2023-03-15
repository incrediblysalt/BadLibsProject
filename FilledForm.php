<!DOCTYPE html>
<html lang="en">
<!-- Ad Libs Project: Form Page -->
<?php include("format.php");?>
	<head>
		<meta charset="UTF-8">
		<title>Bad-Libs</title>
		<link rel="stylesheet" href="css/format.css">

<?php
/*
// TEST DATABASE
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
*/ 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "badlibs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_start();
$num = $_SESSION["badlibs"];

// TEST QUERY
// $sql = "SELECT vars FROM testcombine WHERE id=$_SESSION[badlibs]";
$sql = "SELECT vars FROM libs WHERE id=$num";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
	$str = $row["vars"];
	$arr = explode("/", $str);
  }
} else {
  echo "0 results";
}

// Let's fix the $_POST variables
// Replace all "/" with ""
for($i=1; $i<count($arr); $i+=2) {
	$var = $arr[$i];
	$_POST[$var] = str_replace("/", "", $_POST[$var]);
}

// Get title of bad-lib
$sql = "SELECT title FROM libs WHERE id=$num";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
	$title = $row["title"];
  }
} else {
  echo "0 results";
}

$conn->close();
?>
		<script src="js/form.js"></script>
		<script>
			function clearForm() {
				for(var i=1; i< <?php echo count($arr); ?>; i+=2) {
					var inp = document.getElementById(i);
					inp.setAttribute("value", "");
				}
			}
		</script>
	</head>
	<body>
		<?php echo logo(100, 460);?>
		<div class="container">
			<h1> Bad-Lib Form </h1>
			
			<h2 class="titleTxt"> Title: <?php echo $title; ?> </h2>
			<form action="Generated.php" method="POST" id="adForm" style="z-index: 5;">
				<div class="badForm">
					<?php
						for($i=0; $i<count($arr); $i++) {
							$name = $arr[$i];
							$i++;
							$var = $arr[$i];
							
							echo "<label class='col1'> $name: </label>
								  <input class='col2' type='text' name=$var id=$i maxlength='30' value='$_POST[$var]' />
								  <br><br>";
						}
					?>
					<br>
				</div>
				
				<div class="formBtns">
					<input class="btn" type="reset" value="Reset Form" onclick="clearForm()"/>
					
					<input class="btn" type="submit" value="Submit Form"/>
				</div>
				
				<br>
			</form>
			
			<?php echo index("form");?>
		</div>
	</body>
</html>