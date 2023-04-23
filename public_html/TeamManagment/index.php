<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>Select Your Team</h1>
        <?php 
            $names = fopen("../teamNames", "r") or die ("Unable to open file!");

            $data = array();
            $i = 0;
            while(!feof($names)) {
                $teamNames[$i] = fgets($names);
                $i++;
            }
            fclose($names);
            
            foreach($teamNames as $teamName){
                echo '<div>';
                echo '<a href="./manage.php?name='."$teamName".'">'."$teamName".'</a>';
                echo '</div>';
            }
        ?>
    </body>
</html>