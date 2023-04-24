<table>
    <tr>
        <th>Team Name</th>
        <th>Flags Captured</th>
    </tr>
    <?php 
        $sql = 'SELECT `Name`, `Score` FROM `Teams` ORDER BY `Teams`.`Score` DESC;';
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {

            echo '<tr>';
            echo '<td>', "$row[Name]",'</td>';
            echo '<td>', "$row[Score]",'</td>';
            echo '</tr>';

        } 
    ?>
</table>