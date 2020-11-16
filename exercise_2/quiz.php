<?php

$phone = $_POST["phone"];
$sport = $_POST["sport"];
$mountain = $_POST["mountain"];
$bear = $_POST["bear"];
$language = $_POST["language"];

$score = 0;

if ($phone == "Samsung") {
	$score++;
}

if ($sport == "Football") {
	$score++;
}

if ($mountain == "Bhutan") {
	$score++;
}

if ($bear == "Polar Bear") {
	$score++;
}

if ($language == "Mandarin") {
	$score++;
}

switch ($score) {
    case 0:
		$scorePercentage = 0;
        break;
    case 1:
        $scorePercentage = 20;
        break;
    case 2:
        $scorePercentage = 40;
        break;
	case 3:
        $scorePercentage = 60;
        break;
	case 4:
        $scorePercentage = 80;
        break;
    case 5:
        $scorePercentage = 100;
        break;
		}
?>

<!DOCTYPE html>
<html>
<head>
  <title> Quiz </title>
  <style type=text/css>
		html * {
		  font-size: 1.05em;
		  color: #000;
		  font-family: "Arial", monospace;
		  background-color: LightBlue;
		  text-align: center;
		}
		
		.list {
		  position: fixed;
		  top: 50%;
		  left:50%;
		}
		
		table {
		  width: 60%;
		  margin-left:auto;
		  margin-right:auto

		}
		
		th {
		  border: 4px solid black;
		  height: 50px;
		  padding: 20px;
		}
		
		td {
		  border: 4px solid black;
		  padding: 15px;
		}
	  </style>  
</head>
<body>
  
  <table>
	<tr>
	<th> Quiz - Results </th>
    </tr>
   
   <tr>
	<td>
		<b> 1: Which brand of phone do people in the US purchae most? </b><br>
		
		<p> a) Apple </p>
		<p> b) Samsung </p>
		<p> c) Google </p>
		<p> d) Nokia</p>
		
		<p> <b>Your answer:</b> <?php echo $phone ?>
		<p> <b>Correct answer:</b> Samsung
	</td>
   </tr>
   
   <tr>
	<td>
		<b> 2: Most popular sport in US?  </b><br>
		
		<p> a) Football </p>
		<p> b) Soccer </p>
		<p> c) Tennis </p>
		<p> d) Basketball </p>
		
		<p> <b>Your answer:</b> <?php echo $sport ?>
		<p> <b>Correct answer:</b> Football
	</td>
   </tr>
   
    <tr>
	<td>
		<b> 3:  Most mountainous country? </b><br>
		
		<p> a) Greenland </p>
		<p> b) Peru </p>
		<p> c) Lesotho </p>
		<p> d) Bhutan </p>
		
		<p> <b>Your answer:</b> <?php echo $mountain ?>
		<p> <b>Correct:</b> Bhutan
	</td>
   </tr>
   
   <tr>
	<td>
		<b> 4: Which type of bear can't climb trees? </b><br>
		
		<p> a) Brown Bear </p>
		<p> b) Black Bear </p>
		<p> c) Koala Bear </p>
		<p> d) Polar Bear </p>
		
		<p> <b>Your answer:</b> <?php echo $bear ?>
		<p> <b>Correct:</b> Polar Bear
	</td>
   </tr>
   
    <tr>
	<td>
		<b> 5: Most common language? </b><br>
		
		<p> a) French </p>
		<p> b) Mandarin </p>
		<p> c) English </p>
		<p> d) Hindi </p>
		
		<p> <b>Your answer:</b> <?php echo $language ?>
		<p> <b>Correct:</b> Mandarin
	</td>
	</tr>
	
	<tr>
	<td>
		<b> Final Score:</b> <?php echo $score ?>/5 <br>
		<b> Percentage Correct:</b> <?php echo $scorePercentage?>%
	</td>
    </tr>
   
 </table>
</body>
</html>