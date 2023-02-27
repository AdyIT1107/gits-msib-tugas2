<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Website Sederhana</title>
        <meta charset="UTF-8">
        <meta name="description" contents="Tugas 2 MSIB GITS">
        <link rel="stylesheet" href="Style.css" type="text/css">
    </head>
<body>
    <header>
        <h1 class="title">Tugas 2 </h1>
        <h3 class="desc"> Membuat Website dengan HTML,CSS, dan PHP</h3>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch ($page){
                case 'home':
                    include "home.php";
                    break;
                case 'about':
                    include "about.php";
                    break;
                case 'contact':
                    include "contact.php";
                    break;
            }
        }
    else{
        include "home.php";
    }
    ?>
    </div>
    <footer>Made By Ady Putra Ramadhan | IST AKPRIND YOGYAKARTA</footer>
</body>
</html>