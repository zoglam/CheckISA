<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=0.6"/>
    <title>KALKULATOR</title>
    <link rel="stylesheet" href="1.css">
    <link rel="shortcut icon" href="k/icon.png" type="image/png">
</head>

<style>

</style>

    <body>

        <form method="post" action="1.php" class="text">
            <input type="text" name="tekst" class="text_tab" placeholder="Число" />

    <p class="p1">

    <?php

    //Проверка на число
    function digit_check($str1, $str2){
        if(is_numeric($str1)==false || is_numeric($str2)==false){
        echo ("<script>location.href='error_main.htm'</script>");
        return 0;}
    }
    //Проверка деления на ноль
    function delenie_0($str1){
        if($str1 == 0){
        echo ("<script>location.href='error_0.htm'</script>");
        return 0;}
    }

date_default_timezone_set('Europe/Moscow');//Установить зону-время
$person = $_SERVER['REMOTE_ADDR'];//Сохранить ip

$text = $_POST["tekst"];//Взять строку из поля
$length = strlen($text);//Длина строки

$today[1] = date("d-M H:i");//массив содержащий время
$file_text = $text . "  ||  ".$person."  ||  ".$today[1];
$fp = fopen('spisok.txt', 'a+');//Открыть файл
$test = fwrite($fp, $file_text . "\r\n");//Записать в файл
fclose($fp);//Закрыть файл

$pos_plus = strpos($text, "+");//позиция плюса
$pos_minus = strpos($text, "-");//позиция минуса
$pos_double = strpos($text, "*");//позиция звезды
$pos_division = strpos($text, "/");//позиция палки
$pos_division2 = strpos($text, ":");//позиция двоеточия
$pos_power = strpos($text, "^");//позиция галки
$pos_percent = strpos($text, "%");//позиция процента

//Сложение(+)
if($pos_plus!=false){
    $first = substr($text,0,$pos_plus);//до плюса
    $second = substr($text,$pos_plus+1,$length);//после плюса
    digit_check($first, $second);//оба ли числа?
    $result = $first + $second;//Сложить две части
    echo "(".$first."+".$second.") равно ".'<u>'.$result.'</u>';
}
//Вычитание(-)
elseif($pos_minus!=false){
    $first = substr($text,0,$pos_minus);//до минуса
    $second = substr($text,$pos_minus+1,$length);//после минуса
    digit_check($first, $second);//оба ли числа?
    $result = $first - $second;//Вычесть две части
    echo "(".$first."-".$second.") равно ".'<u>'.$result.'</u>';
}
//Умножение(*)
elseif($pos_double!=false){
    $first = substr($text,0,$pos_double);//до звезды
    $second = substr($text,$pos_double+1,$length);//после звезды
    digit_check($first, $second);//оба ли числа?
    $result = $first * $second;//Умножить две части
    echo "(".$first."*".$second.") равно ".'<u>'.$result.'</u>';
}
//Деление(/)
elseif($pos_division!=false){
    $first = substr($text,0,$pos_division);//до палки
    $second = substr($text,$pos_division+1,$length);//после палки
    delenie_0($second);//проверка на ноль
    digit_check($first, $second);//оба ли числа?
    $result = $first / $second;//Разделить две части
    echo "(".$first."/".$second.") равно ".'<u>'.$result.'</u>';
}
//Деление(:)
elseif($pos_division2!=false){
    $first = substr($text,0,$pos_division2);//до палки
    $second = substr($text,$pos_division2+1,$length);//после палки
    digit_check($first, $second);//оба ли числа?
    delenie_0($second);//проверка на ноль
    $result = $first / $second;//Разделить две части
    echo "(".$first.":".$second.") равно ".'<u>'.$result.'</u>';
}
//Возведение в степень(^)
elseif($pos_power!=false){
    $first = substr($text,0,$pos_power);//до плюса
    $second = substr($text,$pos_power+1,$length);//после плюса
    digit_check($first, $second);//оба ли числа?
    $result = pow ($first,$second);//Сложить две части
    echo "(".$first."<sup>".$second."</sup>) равно ".'<u>'.$result.'</u>';
}
//Процент от числа(%)
elseif($pos_percent!=false){
    $first = substr($text,0,$pos_percent);//до плюса
    $second = substr($text,$pos_percent+1,$length);//после плюса
    digit_check($first, $second);//оба ли числа?
    $result = ($first/100)*$second;//Сложить две части
    echo "(".$first."%".$second.") равно ".'<u>'.$result.'</u>';
}
else{
    echo ("<script>location.href='error_main.htm'</script>");
}

?>
    <p>
        <div class="box1">
            <div class="K1"><a href="OFF.htm">OFF</a></div>
            <div class="K2">MRC</div>
            <div class="K3">M-</div>
            <div class="K4">M+</div>
            <div class="K5">/</div>
        </div>

        <div class="box2">
            <div class="K6">%</div>
            <div class="K7">7</div>
            <div class="K8">8</div>
            <div class="K9">9</div>
            <div class="K10">*</div>
        </div>

        <div class="box3">
            <div class="K11">x^y</div>
            <div class="K12">4</div>
            <div class="K13">5</div>
            <div class="K14">6</div>
            <div class="K15">-</div>
        </div>

        <div class="box4">
            <div class="K16"><a href="CE.htm">ON</a></div>
            <div class="K17">1</div>
            <div class="K18">2</div>
            <div class="K19">3</div>
            <div class="K20">+</div>
        </div>

        <div class="box5">
            <div class="K21"><a href="CE.htm">CE</a></div>
            <div class="K22">0</div>
            <div class="K23">.</div>
        </div>

            <input type="submit" class="K24" value="=" />
        </form>

        <img src="k/p2.png" class="ramka2" />

        <div class="ps">
            Работают клавиши: ОFF, ОN, CE, =
        </div>

        <div class="menu">
            <a href="../1.htm">menu</a>
        </div>

    </body>
</html>
