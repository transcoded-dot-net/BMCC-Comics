<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <title>Comic From Table</title>


</head>

<body>
<div class="banner">
    <img class="bannerimage" src="img/comics-background.jpg">
    <a href="index.php"><img class="logo" src="img/CBDB.png"></a>
</div>

<div style="padding-top: 0; float:right;" class="topnav">
    <a href="series.php">Series</a>
    <a href="teams.php">Teams</a>
    <a href="characters.php">Characters</a>
    <a href="creators.php">Creators</a>
    <a href="register.php">Register</a>
    <a href="login.php">Login</a>
</div>
</body>
<h1 style="text-align: center">Title of Comic from PHP</h1>
    <img src="img/batman1.jpg" style = "  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
      min-width: 250px;
    max-width: 350px;
">
    <table class="w3-table w3-striped" style = "width:50%; margin-left: auto;
  margin-right: auto;">

        <tr>
            <td>Series</td>
            <td><a href="series_viewer.php?seriesID">Attribute from table</a></td>
        </tr>
        <tr>
            <td>Volume</td>
            <td>Attribute from table</td>
        </tr>
        <tr>
            <td>Issue Number</td>
            <td>Attribute from table</td>
        </tr>
        <tr>
            <td>Cover Date</td>
            <td>Attribute from table</td>
        </tr>
        <tr>
            <td>Creator</td>
            <td><a href="creator_viewer.php?creatorID">Attribute from table</a></td>
        </tr>
    </table>




</html>