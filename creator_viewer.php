<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <title>Creator From Table</title>


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
<h1 style="text-align: center">Title of Creator from PHP</h1>

<div class="container">
    <a><img src="img/jerry_ordway.jpg"></a>
    <table class="w3-table w3-striped" style = "width:50%">

        <tr>
            <td>Name</td>
            <td>Attribute from table</td>
        </tr>
        <tr>
            <td>Most Known For</td>
            <td><a href="character_viewer.php?characterid">attribute from table</a></td>
        </tr>
        <tr>
            <td>First Comic</td>
            <td><a href="comic_viewer.php?comicid">1st Attribute from comics table sorted by ascending date where creator id is included</a></td>
        </tr>
        <tr>
            <td>Latest Comic</td>
            <td><a href="comic_viewer.php?comicid">1st Attribute from comics table sorted by descending date where creator id is included</a></td>
        </tr>
        </tr>
    </table>
</div>
<div class = "container">
    <div><h2 style="text-align: center">Comics</h2>

    <ul class="w3-ul" style=" margin-left: auto; margin-right: auto; width: fit-content">
        <li><a href="comic_viewer.php?comicid">title of 1st Comic with Creator ID as Attrbute</a></li>
        <li><a href="comic_viewer.php?comicid">title of 2nd Comic with Creator ID as Attrbute</a></li>
        <li><a href="comic_viewer.php?comicid">title of 3rd Comic with Creator ID as Attrbute</a></li>
        <li><a href="comic_viewer.php?comicid">title of 4th Comic with Creator ID as Attrbute</a></li>
        <li><a href="comic_viewer.php?comicid">title of 5th Comic with Creator ID as Attrbute</a></li>
    </ul>
    </div>
    <div style="float: left">
    <h2 style="text-align: center">Characters</h2>
    <ul class="w3-ul" style=" margin-left: auto; margin-right: auto; width: fit-content">
        <li><a href="character_viewer.php?heroid">title of 1st Character with Creator ID as Attrbute</a></li>
        <li><a href="character_viewer.php?heroid">title of 2nd Character with Creator ID as Attrbute</a></li>
        <li><a href="character_viewer.php?heroid">title of 3rd Character with Creator ID as Attrbute</a></li>
        <li><a href="character_viewer.php?heroid">title of 4th Character with Creator ID as Attrbute</a></li>
        <li><a href="character_viewer.php?heroid">title of 5th Character with Creator ID as Attrbute</a></li>
    </ul></div>
</div>



</html>