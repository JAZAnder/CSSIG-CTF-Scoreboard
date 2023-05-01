<!DOCTYPE html>
<html>
    <head>
        <?php include'./creds.php'; ?>
        <meta http-equiv="refresh" content="10" />
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <h1>Welcome to The Southeastern Cyber Sceurity Overnight Capture The Flag</h1>
        <!-- Most Recent -->
        <?php include './Scoreboard/recents.php'; ?>
        <!-- All Team Scores -->
       <?php include './Scoreboard/scoreBoard.php'; ?>
       <!-- Links --> 
       <a href="./TeamManagment/"><button>Manage My Team</button></a> 
    </body>
</html>