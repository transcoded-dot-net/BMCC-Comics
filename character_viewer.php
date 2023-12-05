<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <title>Character from table</title>


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
<h1 style="text-align: center">Title of Character from PHP</h1>

<div class="container">
   <a><img src="img/batman.jpg"></a>
    <table class="w3-table w3-striped" style = "width:50%">

        <tr>
            <td>Hero Name</td>
            <td>Attribute from table</td>
        </tr>
        <tr>
            <td>Identity</td>
            <td>Attribute from table</td>
        </tr>
        <tr>
            <td>First Appearance</td>
            <td><a href="comic_viewer.php?comicid">1st Attribute from comics table sorted by ascending date where hero id is included</a></td>
        </tr>
        <tr>
            <td>Latest Comic</td>
            <td><a href="comic_viewer.php?comicid">1st Attribute from comics table sorted by descending date where hero id is included</a></td>
        </tr>
        <tr>
            <td>Creator</td>
            <td><a href="creator_viewer.php?creatorid">Attribute from table</a></td>
        </tr>
    </table>
</div>
<h2 style="text-align: center">Comics</h2>
<ul style=" margin-left: auto; margin-right: auto; width: fit-content" class="w3-ul">
    <li><a href="comic_viewer.php?heroid">title of 1st Comic with Hero ID as Attrbute</a></li>
    <li><a href="comic_viewer.php?heroid">title of 2st Comic with Hero ID as Attrbute</a></li>
    <li><a href="comic_viewer.php?heroid">title of 3rd Comic with Hero ID as Attrbute</a></li>
    <li><a href="comic_viewer.php?heroid">title of 4th Comic with Hero ID as Attrbute</a></li>
    <li><a href="comic_viewer.php?heroid">title of 5th Comic with Hero ID as Attrbute</a></li>
</ul>



</html>