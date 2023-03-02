<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback form 2 page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="header">
            <a href="https://mospolytech.ru/">
                <img class="header__logo" src="images/0b6dd8bb96f9fc0544405b04019e34b7.png">
            </a>
            <p class="header__desc">4.1. Домашняя работа: Feedback Form. </p>

        </div>
    </header>

    <main>
        <textarea class="php_response">
            <?php 
                $url ='http://www.example.com';
                print_r(get_headers($url));    
            ?>
        </textarea>
    </main>

    <footer>
        <div class="footer">
            
        
            <p>
                <?php
                 echo 'Студент группы 221-322 Леушин Александр Александрович';
                ?>
            </p>
        

        </div>
    </footer>
</body>

</html>