<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Feedback form</title>
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
            <form class="main__form" action="https://httpbin.org/post" name="simple_form" autocomplete="on" method="post">
                
                <label for="name"> Имя пользователя: </label>
                <input type="name" id="name" placeholder="Login" required> 
                <br>
                <br>

                <label for="email">Почта пользователя:</label>
                <input type="email" id="email" placeholder="example@mail.com" required>
                <br>
                <br>

                <label for="type_of_appeal">Тип обращения</label>
                <select name="type_of_appeal" id="type_of_appeal" required>
                    <option selected value>Выберете тип обращения</option>
                    <option value="Complaint">Жалоба</option>
                    <option value="Offer">Предложение</option>
                    <option value="Gratitude">Благодарность</option>
                </select>
                
                <br>

                <textarea name="text" placeholder="Введите текст" required></textarea>
                
                <br>
                <div class="form__checkboxes">
                    <p class="option_label">Вариант ответа:</p>
                    <p><input type="checkbox" name="SMS" value="SMS"> SMS <p>
                    <p><input type="checkbox" name="email" value="email"> E-mail <p>
                </div>

                <br>
                <input type="submit" id="submit" value="Отправить">
            </form>

        <a href="page2.php" class="second_page">2 страница</a>

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