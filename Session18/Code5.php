<?php
$result = mysqli_query($connect_mysql, "SELECT * FROM Employees");
while ($rows = mysqli_fetch_row($result)){
    print_r("%s (%s)\n", $rows[0], $rows[1] );
}
?>
