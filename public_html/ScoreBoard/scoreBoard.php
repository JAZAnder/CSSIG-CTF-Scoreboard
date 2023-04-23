<table>
    <tr>
        <th>Team Name</th>
        <th>Flags Captured</th>
    </tr>
    <?php 
        $names = fopen("teamNames", "r") or die ("Unable to open file!");

        $data = array();
        $i = 0;
        while(!feof($names)) {
            $teamNames[$i] = fgets($names);
            $i++;
        }
        fclose($names);
    
        foreach($teamNames as $teamName){
            if(empty($teamName)){break;}
            echo '<tr>';
            echo '<td>', "$teamName",'</td>';
            $scoreKeeper = fopen("Scores", "r") or die ("Unable to open file!");
            $score = 0;
            //echo '<h1>'."$teamName".'</h1>';
            while(!feof($scoreKeeper)) {
                $line = fgets($scoreKeeper);
                if (preg_match("/$teamName/i", $line)) {
                    $score++;
                }
            }
            echo '<td>', "$score",'</td>';
            fclose($scoreKeeper);
            echo '</tr>';
        }
    ?>
</table>