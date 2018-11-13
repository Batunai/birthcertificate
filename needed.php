<?php
$con=mysqli_connect("localhost","root","password","db");
$result = mysqli_query($con,"SELECT userid,date,rating1,rating2 FROM db ORDER BY userid");
$id = -1;

while($row = mysqli_fetch_array($result)) {
    if ($id != -1 && $id != $row['userid']) {
        echo '</tbody>';
        echo '</table>';
    }

    if ($id != $row['userid']) {
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>UserID</th>';
        echo '<th>Date</th>';
        echo '<th>First Rating</th>';
        echo '<th>Second Rating</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        $id = $row['userid'];
    }

    echo '<tr>';
    echo '<td>'.$row['userid'].'</td>';
    echo '<td>'.$row['date'].'</td>';
    echo '<td>'.$row['rating1'].'</td>';
    echo '<td>'.$row['rating2'].'</td>';
    echo '</tr>';
 }

echo '</tbody>';
echo '</table>';
?>