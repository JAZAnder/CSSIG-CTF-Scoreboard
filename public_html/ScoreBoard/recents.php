<?php 
    $sql = "SELECT `Teams`.`Name` FROM `Teams` LEFT JOIN `Flags` ON `Flags`.`TeamId` = `Teams`.`ID` ORDER BY `Flags`.`Time` DESC";
    $result = $conn->query($sql);

    $i=0;
    while($row = $result->fetch_assoc() and $i<3) {

        echo "<div class=r$i>";
        echo 'Team '."$row[Name]". ' Captured a Flag!';
        echo "</div>";
        $i++;
    } 

?>

