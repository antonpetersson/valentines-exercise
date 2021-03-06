<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/style/style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600" rel="stylesheet"> 
    <title>Valentines Day</title>
</head>
<body>
    <div id = "header">
        <div id="logo">
        <h1>Valentines</h1>
        </div>
        <div id="menu">
            <ul id="menuUL">
                <li><a href="../index.php">Start</a></li>
                <li class="dropdownList">
                    <a href="javascript:void(0)" class="dropbtn">Valentines-tips</a>
                    <div class="dropdown-content">
                        <div class="layer">
                            <a href="../pages/gift.php">Present-tips</a>
                            <a href="../pages/filmtips.php">Film-tips</a>
                            <a href="../pages/restaurang.php">Restaurang-tips</a>
                            <a href="../pages/godistips.php">Godis-tips</a>
                        </div>
                    </div>
                </li>
                <li><a href="../pages/WhatisValDay.php">Om Valentines day</a></li>
                <li><a href="../pages/singelsidanlogin.php">Singel-sidan</a></li>
                <li><a href="../pages/contactinfo.php">Kontakt</a></li>
                <li><a href="../pages/aboutus.php">Om oss</a></li>
                <li class="dropdownList">
                    <a href="javascript:void(0)" class="dropbtn">Spara favoriter</a>
                    <div class="dropdown-content">
                        <div class="layer">
                            <form action="" method="post" id="favoritesList">
                                <input type="checkbox" name="checkFavorites[]" value='<a href="../pages/gift.php">Present-tips</a>'>Present-tips</input></br>
                                <input type="checkbox" name="checkFavorites[]" value='<a href="../pages/filmtips.php">Film-tips</a>'>Film-tips</input></br>
                                <input type="checkbox" name="checkFavorites[]" value='<a href="../pages/restaurang.php">Restaurang-tips</a>'>Restaurang-tips</input></br>
                                <input type="checkbox" name="checkFavorites[]" value='<a href="../pages/godistips.php">Godis-tips</a>'>Godis-tips</input></br>
                                <input type="checkbox" name="checkFavorites[]" value='<a href="../pages/WhatisValDay.php">Om Valentines day</a>'>Om Valentines day</input></br>
                                <input type="checkbox" name="checkFavorites[]" value='<a href="../pages/singelsidanlogin.php">Singel-sidan</a>'>Singel-sidan</input></br>
                                <input type="checkbox" name="checkFavorites[]" value='<a href="../pages/contactinfo.php">Kontakt</a>'>Kontakt</input></br>
                                <input type="checkbox" name="checkFavorites[]" value='<a href="../pages/aboutus.php">Om oss</a>'>Om oss</input></br>
                                <input type="submit" name="submit" Value="Spara"/>
                            </form>
                        </div>
                    </div>
                </li>
        </div>
    </div>

    <div id = "content">