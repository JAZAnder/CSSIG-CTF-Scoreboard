<!DOCTYPE html>
<html>
    <head>
        <?php include'../creds.php'; ?>
        <?php
            $name = $_GET['name'];
            $refeshLink = "./manage.php?name=$name";
            $addPointLink = "./manage.php?name=$name&point=true";
            
            //Calculate Score $score
            $sql = "SELECT `Score`, `ID` FROM `Teams` WHERE `Name` LIKE '$name';";
            $result = $conn->query($sql); 
            while($row = $result->fetch_assoc()) {
                $score = $row['Score'];
                $ID = $row['ID'];
            } 
        ?>

        <?php
            if(!empty($_GET['point'])){
                if($_GET['point']=='true'){
                    $content= " '1; url=$refeshLink' ";
                    echo "<meta http-equiv='Refresh' content='5; url=$refeshLink' />";
                    $score++;
                    $sql = "UPDATE `Teams` SET `Score` = '$score' WHERE `Name` LIKE '$name';";
                    $conn->query($sql);
                    $sql = "INSERT INTO `Flags` (`TeamId`) VALUES ('$ID');";
                    $conn->query($sql);

                }
            } 
        ?>
    </head>
    <body>
        
        <h1>Welcome Team, <?php echo $name;?></h1>
        <h2>You Have <?php echo $score;?> points!</h2>
        
        <?php echo '<a href="'."$addPointLink".' "><button>New Flag Catpured!</button></a>'?>
        <a href=".."><button>See All Scores</button></a>
    </body>
</html>