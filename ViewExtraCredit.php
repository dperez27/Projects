<html lang="en">
<head>
<title>Administrator/View Extra Credit</title>
<link href="project.css" rel="stylesheet">
</head>
<body>
<h1>View Extra Credit</h1>
<nav>
 
  <a href="index.html">Home</a>
  <a href="ApproveBusiness.html">Approve Business</a>
  <a href="ApproveTalk.html">Approve Talk</a>
  <a href="MarkAttendance.html">Mark Attendance</a>
  <a href="ViewExtraCredit.php">View Extra Credit</a>
  <a href="login.html">Login</a>
  </nav>
 <?php
  if (isset($_GET['submitted'])){
	include('connect.php');
	$query = "SELECT * FROM Tilted.ExtraCredit";
try{
	$result = $conn->query($query);
}catch(PDOException $e){
echo "oh nos, an exception! still happening?";
echo $e->getMessage();
}
		echo "<table>";
			echo"<tr><th>Student ID</th><th>Extra Credit Points</th><th>Course</th></tr>";
			foreach($result as $row){
			echo "<tr><td>";
			echo $row['StudentID'];
			echo "</td><td>";
			echo $row['ECPoints'];
			echo "</td><td>";
			echo $row['Course'];
			echo "</td></tr>"; "</td><td>";
			}
		echo "</table>"
  }

 ?>
</body>
</html>