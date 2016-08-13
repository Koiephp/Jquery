<!DOCTYPE html>
<html>
<head>
    <title>Lesson 1</title>
    <script type="text/javascript" src="lib/jquery-3.1.0.min.js"></script>
</head>
<style>
    .class1 {
        color: yellow;
    }

    .class2 {
        color: pink;
    }
</style>
<body>
<p></p>
    <p>font-size not 24px :)</p>
    <div>
        <p>Hello!</p>
    </div>
    <div>
        <p>GD</p>
        <ul>
            <li>Hana</li>
            <li>Tul</li>
            <li>Set</li>
        </ul>
    </div>
    <span>Hi, i'm span without div!</span>
    <div id="div">
        <span>Hi, i'm span in div!</span>
        <p class="red">Not red</p>
        <p id="red">Red?! Reeeed!11</p>
    </div>
    <a href="#">link without target</a>
    <a href="#" target="_blank">link with target</a>
    <br/>
    <span>Login:</span><input type="text"/><br />
    <span>Password:</span><input type="password" name="input_background"/>
    <script>
        $(document).ready(function() {
            $('p + ul').css("color", "red"); // Для ul следующего после p
            $('div > p').css("font-size", "24px"); // Для p внутри div
            $('div:has(ul)').css('background',"blue"); // Для div в котором есть то, что находится внутри has()
            $('div:has(p)').css('color','orange'); // см. выше
            $('p.red').css("color", "blue"); // Для класса
            $('p#red').css("color", "red"); // Для индетификатора
            $('#div').css("background", "#777");
            $('span ~ p').css("font-size", "16px"); // p следующие за span
            $('a[target]').css("text-decoration","none"); // Выбирает "а" с таргетом
            $('input[type=text]').val('AdminKO'); // Для инпута с типом текст добавляет Value="..."
            $("a[href^='http://']").css('color','green'); // Для ссылок начинающихся на http://
            $("a[href$='.com']").css('color','green'); // Для ссылок оканчивающиеся на .com
            $("a[href*='html']").css('color','green'); // Для ссылок содержащих 'html'
            $('p').eq(0).text("$('p') - выборка по имени тега"); // eq - выбирает нужный элемент по индексу
            $('[name="input_background"]').css("background", "yellow"); // выборка по имени
            $('#first').on('click', firstButtonHandler); // Вызываем функцию при нажатие по id
            $('#second').on('click', secondButtonHandler); // см. выше
            var div = $('#testDiv'); // Переменной div присваиваем эл-нт с id - testDiv.

            function firstButtonHandler() {
                div.removeClass(); // удаляем все классы
                div.addClass("class1"); // добавляем класс1
            }
            function secondButtonHandler() {
                div.removeClass();
                div.addClass("class2");
            }
        });
    </script>
    <input type="button" id="first" name="first"/>
    <input type="button" id="second" name="second"/>
    <div id="testDiv">
        <p>ololo ololo lolololo lololo</p>
    </div>
</body>
</html>
