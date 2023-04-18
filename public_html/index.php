<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <!-- All Team Scores -->
        <table>
            <tr>
                <th>Team Name</th>
                <th>Flags Captured</th>
            </tr>
            <?php 
                $file = fopen("Scores", "r") or die ("Unable to open file!");

                $data = array();
                $i = 0;
                while(!feof($file)) {
                    $line = fgets($file);
                    $data[$i] = explode('-%-', $line);
                    $i++;
                }
                fclose($file);
            
                foreach($data as $dataline){
                    echo '<tr>';
                    echo '<td>', "$dataline[0]",'</td>';
                    echo '<td>', "$dataline[1]",'</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </body>
</html>