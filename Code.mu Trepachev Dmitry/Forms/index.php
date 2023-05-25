<!doctype html>
<html lang="en">
<head>
    <title>Practice</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<!--<form class="form" action="result.php">-->
<!--    <div><label for="name">Name: </label><input name ="name" type="text"></div>-->
<!--    <div><label for="name">Age: <input name="age" type="text"></label></div>-->
<!--    <div><label for="salary">Salary: <input name="salary" type="number"></label></div>-->
<!--    <input type="submit">-->
<!--</form>-->

<!--Сделайте форму с тремя инпутами. Пусть в эти инпуты вводятся числа. После отправки формы выведите на экран сумму этих чисел.-->
<!--<form class="form" action="result.php" method="post">-->
<!--    <div><input name ="num1"></div>-->
<!--    <div><input name="num2"></div>-->
<!--    <div><input name="num3"></div>-->
<!--    <input type="submit">-->
<!--</form>-->

<!--С помощью формы спросите у пользователя его имя и возраст. После отправки формы выведите эти данные на экран.-->

<!--<form class="form" action="result.php" method="POST">-->
<!--    <label for="name">What is your name?</label><input name="name">-->
<!--    <label for="age">What is you age?</label> <input name="age">-->
<!--    <input type="submit">-->
<!--</form>-->

<!--<form action="result.php" method="POST">-->
<!--    <input type="password" name="pass">-->
<!--    <input type="submit">-->
<!--</form>-->
<!---->

<!--С помощью трех инпутов спросите у пользователя год, месяц и день рождения пользователя. + -->
<!--После отправки формы определите день недели, в который родился пользователь.-->

<!--<form class="form" method="post" action="result.php">-->
<!--    <input name="year">-->
<!--    <input name="month">-->
<!--    <input name="day">-->
<!--    <input type="submit">-->
<!--</form>-->

<!--Спросите у пользователя фамилию, имя и отчество. После отправки формы выведите на экран введенные данные.-->
<!--<form class="form">-->
<!--    <label for="name">What is your name?</label> <input name="name">-->
<!--    <label for="fname">What is your family name?</label> <input name="fname">-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//    if(!empty($_GET)) {
//        echo $_GET['name'] . $_GET['fname'];
//    }
//?>

<!--С помощью формы спросите имя пользователя. После отправки формы поприветствуйте пользователя по имени, а форму уберите.-->
<?php
//if(empty($_GET)) {
//?>
<!--    <form class="form" method="get" action="">-->
<!--        <label for="name">What is your name?</label> <input name="name">-->
<!--        <input type="submit">-->
<!--    </form>-->
<?php
//
//        } else {
//    echo "Hi, <b>$_GET[name]</b>! How are you today?";
//    }
//?>


<?php
//259
//С помощью формы спросите город и страну пользователя.
//После отправки формы выведите введенные данные на экран.
//Сделайте так, чтобы введенные данные не пропадали из инпутов после отправки формы.
?>
<!--<form action="" method="GET">-->
<!--    --><?php
//    if (isset($_GET['year'])) {
//        if(((int)$_GET['year']) % 4 === 0) {
//        echo 'високосный год';
//        } else echo 'невисокосный год';
//    } else { ?>
<!--        <input type = "text" name="year" placeholder="--><?php //echo date('Y')?><!--">-->
<!--        <input type="submit">-->
<!--    --><?php //} ?>
<!--</form>-->

<?php
//261 С помощью трех инпутов спросите у пользователя год, месяц и день. После отправки формы
// выведите на экран. По заходу на страницу сделайте так, чтобы в инпутах стояла текущая дата.
?>

<?php
//    if ((isset($_GET['year'])) && (isset($_GET['month'])) && (isset($_GET['day']))) {
//     $month = $_GET['month'];
//     $day = $_GET['day'];
//     $year = $_GET['year'];
//         echo "The user's date is $day - $month - $year";
////     $days = $month * $day;
////     $next_year = (int)$_GET['year'] + 1;
////     echo $days . 'is left until the New Year' . $next_year;
//    }
//else { ?>
<!---->
<!--<form action="" method="get">-->
<!--    <input type="text" name="year" value="--><?//=date('Y')?><!--">-->
<!--    <input type="text" name="month" value="--><?//= date('n')?><!--">-->
<!--    <input type="text" name="day" value="--><?//= date('j')?><!--">-->
<!--    <input type="submit">-->
<!--</form>-->
<!---->
<?php //} ?>

<?php
////Попросите пользователя оставить отзыв на сайт. После отправки формы выведите этот отзыв на экран.
//
//if (isset($_GET['review'])) {
//    echo $_GET['review'];
//} else { ?>
<!---->
<!--<p>Вы можете оставить Ваш отзыв на сайте:</p>-->
<!--<form action="" method="GET">-->
<!--<textarea name="review" placeholder="Ваш отзыв..." cols="40" rows="10"></textarea>-->
<!--<input type="submit">-->
<!--</form>-->
<!---->
<?php //} ?>


<?php
// 263. Сохранение значения textarea после отправки в PHP
?>

<!--<form action = "" method="get">-->
<!--    <textarea name="test">--><?//= $_GET['test'] ?? ''; ?><!--</textarea>-->
<!--    <input type="submit">-->
<!--</form>-->


<?php //

//if (isset($_GET['test'])) {
//    echo $_GET['test'];
//} else { ?>
<!---->
<!--<form action = "" method="get">-->
<!--    <textarea name="test"  cols="40" rows="5"-->
<!--              style="resize: unset; scroll-behavior: auto;">--><?//= $_GET['test'] ?? ''; ?><!--</textarea>-->
<!--<input type="submit" value="Новый пост">-->
<!--</form>-->

<?php //} ?>

<?php
//Сделайте форму с инпутом и флажком.
//С помощью инпута спросите у пользователя имя.
//После отправки формы, если флажок был отмечен, поприветствуйте пользователя, а если не был отмечен - попрощайтесь.
?>

<!--<form action="" method="get">-->
<!--    <input type="name" name="name">-->
<!--    <input type="checkbox" name="flag">-->
<!--    <input type="submit">-->
<!--</form>-->
<!--<p>--><?php
//    if (!empty($_GET)) {
//    if (isset($_GET['flag'])) {
//        echo 'Hello, my friend, ' . $_GET['name'] . '!';
//    } else echo 'Goodbye!';
//} ?><!--</p>-->



<?php
//С помощью флажка спросите у пользователя, есть ему уже 18 лет или нет.
//Если есть, разрешите ему доступ на сайт, а если нет - не разрешите.
//if(!empty($_GET)) {
//    if (($_GET['flag']) === '1') echo 'come in';
//    else echo 'sorry but you should leave!';
//} else {?>
<!--<p>Hi, are you already 18y.o.?</p>-->
<!--<form action="" method="get">-->
<!--    <input type="hidden" value="0" name="flag">-->
<!--    <input type="checkbox" name="flag" value="1">-->
<!--    <input type="submit">-->
<!--</form>-->
<!---->
<?php //} ?>

<?php
//Сделайте три чекбокса, которые будут сохранять свое значение после отправки.
?>

<!--<form action="" method="get">-->
<!--    <input type="hidden" name="flag1" value="0">-->
<!--    <input type="hidden" name="flag2" value="0">-->
<!--    <input type="hidden" name="flag3" value="0">-->
<!--    <input type="checkbox" name="flag1" value="1"--><?php //if (!empty($_GET['flag1'])) echo '1 - checked'?>
<!--    >-->
<!--    <input type="checkbox" name="flag2" value="1" --><?php //if (!empty($_GET['flag2'])) echo ' 2 - checked'?>
<!--    >-->
<!--    <input type="checkbox" name="flag3" value="1" --><?php //if (!empty($_GET['flag3'])) echo '3 - checked'?>
<!--    >-->
<!--    <input type="submit">-->
<!--</form>-->
<!---->



<?php

//С помощью двух переключателей спросите у пользователя его пол. Выведите результат на экран.

//if(!empty($_GET['radio'])) {
//    if (($_GET['radio']) === '1') echo 'male';
//    else echo 'female';
//} else { ?>
<!--    <p>What is your gender ? </p>-->
<!--    <form action="" method="GET">-->
<!---->
<!--    <label for="gender">Male</label><input type="radio" name="gender" value="1">-->
<!--    <label for="gender">Female</label><input type="radio" name="gender" value="2">-->
<!--    <input type="submit">-->
<!--</form>-->
<?php //} ?>









</body>
</html>
