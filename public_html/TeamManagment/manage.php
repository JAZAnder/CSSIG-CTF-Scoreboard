<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php 
            $name = $_GET['name'];
            $addPointLink = "./manage.php?name=$name&point=true";
            $scoreKeeper = fopen("../Scores", "r") or die ("Unable to open file!");
            $score = 0;
            while(!feof($scoreKeeper)) {
                $line = fgets($scoreKeeper);
                if (preg_match("/$name/i", $line)) {
                $score++;
                }
            }
            fclose($scoreKeeper);  
        ?>

        <h1>Welcome Team, <?php echo $name;?></h1>
        <h2>You Have <?php echo $score;?> points!</h2>
        <?php echo '<a href="'."$addPointLink".'"><button>New Flag Catpured!</button></a>'?>
        <a href=".."><button>See All Scores</button></a>
        <?php 
            if($_GET['point']=='true'){
                $scores = fopen('../Scores', 'a') or die ("Unable to open file!");
                fwrite($scores, $name);
                fclose($score);  
                header("location: ./manage.php?name=$name");
            }
        ?>
    </body>
</html>