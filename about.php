<?php
$name='Mihail';
$age=22;
$mail='mishanya-95@mail.ru';
$city='Vladivostok';
$aboutme='Я только начал изучать программирование, до этого практически его не касался. Работаю менеджером коммерческого отдела И очень люблю свою работу. Давно хоте научиться программироывть но никак не решался начать учиться.';
echo "<link rel='stylesheet' type='text/css' href='/xampp/htdocs/example/thefirstphp.css'>";
?>

<body>
<p><h1>Моя персональная страница</h1></p>
<table class="table">
    <tr>
        <td>Имя</td>
        <td><?=$name?></td>
    </tr>
    <tr>
        <td>Возраст</td>
        <td><?=$age?></td>
    </tr>
    <tr>
        <td>Адресс электронной почты</td>
        <td><?=$mail?></td>
    </tr>
    <tr>
        <td>Город</td>
        <td><?=$city?></td>
    </tr>
    <tr>
        <td>О себе</td>
        <td><?=$aboutme?></td>
    </tr>
</table>

