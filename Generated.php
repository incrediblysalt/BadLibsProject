<!DOCTYPE html>
<html lang="en">
<!-- Ad Libs Project: Generated Page -->
<?php include("format.php");?>
	<head>
		<meta charset="UTF-8">
		<title>Bad-Libs</title>
		<link rel="stylesheet" href="css/format.css">
		<script src="js/gen.js"></script>
	</head>
<body>
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

// Get Form Number from session
session_start();
$num = $_SESSION["badlibs"];

// Get Variables
// TEST QUERY
// $sql = "SELECT vars FROM testcombine WHERE id=$num";
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

// SHOW TEXT
// TEST QUERY
// $sql = "SELECT text FROM testcombine WHERE id=$num";
$sql = "SELECT text FROM libs WHERE id=$num";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
	$str = $row["text"];
	for($i=1; $i<count($arr); $i+=2) {
		$var = $arr[$i];
		$str = str_replace($var, "<span class='variable'>$_POST[$var]</span>",$str);
	}
	//echo $str;
  }
} else {
  echo "0 results";
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
		<?php echo logo(100, 460);?>
		
		<div class="container">
			<h1> Generated Bad-Lib</h1>
			
			<h2 class="titleTxt"> Title: <?php echo $title; ?> </h2>
			<div class="gen" id="gen">
				<p>
				<?php echo $str ?>
				</p>
			</div>
			
			<div class="editBtn">
				<label> Font Size:
					<input type="range" min="16" max="20" value="16" class="fontSlider" id="fontSlider" oninput="changeFontSize()" />
				</label> <output id="fontDisplay">16</output>
				<label> | Font Style:
					<select name="font" id="fontDrop" oninput="changeFontStyle()">
						<option value="arial">Arial</option>
						<option value="roman">Times New Roman</option>
						<option value="courier">Courier New</option>
						<option value="sciptMT">Brush Script MT</option>
						<option value="pap">Papyrus</option>
						<option value="comic">Comic Sans MS</option>
					</select>
				</label>
			</div>
			<br>
			
			<div>
				<form action="FilledForm.php" method="POST">
					<input class="btn" type="submit" value="Edit Bad-Lib"/>
					<button type="button" class="btn" onclick="startOver()">Create New Bad-Lib</button>
					<?php
						for($i=0; $i<count($arr); $i++) {
							$name = $arr[$i];
							$i++;
							$var = $arr[$i];
							
							echo "<input type='hidden' name=$var value='$_POST[$var]' />";
						}
					?>
				</form>
			</div>
			
			<br>
			
			<?php echo index("gen");?>
		</div>
	</body>
</html>