<!DOCTYPE html>
<html>
    <head>
        <?php include'../creds.php'; ?>
        
    </head>
    <body>
        <?php
            if(!empty($_GET['teamName'])){
                $name=$_GET['teamName'];
                $sql = "INSERT INTO `Teams` (`Name`) VALUES ('$name');";
                if ($conn->query($sql) === TRUE) {
                    //echo '<p> New Team Added <p>';
                } else {
                    echo '<p> Please Try Again, Team Name may already be Taken <p>';
                }
            }
        ?>
        <h1>Select Your Team</h1>
        <?php 
            $sql = 'SELECT `Name` FROM `Teams`;';
            $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
                echo '<div>';
                echo '<a href="./manage.php?name='."$row[Name]".'">'."$row[Name]".'</a>';
                echo '</div>';
            } 
        ?>

        <form action="./index.php" method="get">
            Add New Team : <input type="text" name="teamName"/> <button type="submit">Submit</button>
        </form>

    </body>
</html>