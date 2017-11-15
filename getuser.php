<?php
    require 'dbconnect.php';
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php


$q = $_GET['branch'];
$sql="SELECT prac_sub FROM subject WHERE branch='$q'";
$result = $mysqli->query($sql);
//echo '<tr>';
echo "<td><label>select subjects</label></td>";
echo '<td><select name="prac_sub">';
while($row = mysqli_fetch_array($result)) {
    
    echo "<option value=". $row['prac_sub'] . ">" . $row['prac_sub'] . "</option>";
    
}
echo "</select></td>";
//echo '</tr>'
?>
</body>
</html>