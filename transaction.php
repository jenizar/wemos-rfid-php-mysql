<html>
<head>
<!--//css -->
<style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 2px solid black;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
</style>
</head>

<body bgcolor="#EEFDEF">
<?php
$con = mysqli_connect("localhost","root","","websensor");

$result = mysqli_query($con, "SELECT * FROM rfidtrx ORDER BY vtime DESC");
echo "<table align='center' border='5'>
<tr>
<th style='font-size:85px'>Tag ID</th>
<th style='font-size:85px'>Date</th>
<th style='font-size:85px'>Time</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td style='font-size:85px'>" . $row['tagid'] . "</td>";
  echo "<td style='font-size:85px'>" . $row['vdate'] . "</td>";
  echo "<td style='font-size:85px'>" . $row['vtime'] . "</td>";
  echo "</tr>";
  }

echo "</table>";
mysqli_close($con);
?>
</body>
</html>