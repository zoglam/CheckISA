<html>
<head>
 <meta http-equiv="Content-Type" content="new.html; charset=utf-8">

</head>
<style>
    body{
        padding-top:5px;
        width:550px;
        padding-left:20px;
        height:170px;
        background-image: url(k5.jpg);
        zoom: 2;
        -moz-user-select: none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        user-select: none;
    }
    p{
        color: white;
    }


    </style>
    <body>

    <p style="font-size:120%;">

    <?php
class fsStringConverter

	{
	private static
	function _Lower()
		{
		return array(
		 	'q',
			'w',
			'e',
			'r',
			't',
			'y',
			'u',
			'i',
			'o',
			'p',
			'a',
			's',
			'd',
			'f',
			'g',
			'h',
			'j',
			'k',
			'l',
			'z',
			'x',
			'c',
			'v',
			'b',
			'n',
			'm',
			'ё',
			'й',
			'ц',
			'у',
			'к',
			'е',
			'н',
			'г',
			'ш',
			'щ',
			'з',
			'х',
			'ъ',
			'ф',
			'ы',
			'в',
			'а',
			'п',
			'р',
			'о',
			'л',
			'д',
			'ж',
			'э',
			'я',
			'ч',
			'с',
			'м',
			'и',
			'т',
			'ь',
			'б',
			'ю'
		);
		}

	private static
	function _Upper()
		{
		return array(
			'Q',
			'W',
			'E',
			'R',
			'T',
			'Y',
			'U',
			'I',
			'O',
			'P',
			'A',
			'S',
			'D',
			'F',
			'G',
			'H',
			'J',
			'K',
			'L',
			'Z',
			'X',
			'C',
			'V',
			'B',
			'N',
			'M',
			'Ё',
			'Й',
			'Ц',
			'У',
			'К',
			'Е',
			'Н',
			'Г',
			'Ш',
			'Щ',
			'З',
			'Х',
			'Ъ',
			'Ф',
			'Ы',
			'В',
			'А',
			'П',
			'Р',
			'О',
			'Л',
			'Д',
			'Ж',
			'Э',
			'Я',
			'Ч',
			'С',
			'М',
			'И',
			'Т',
			'Ь',
			'Б',
			'Ю'
		);
		}

	public static

	function ToUpper($string)
		{
		return str_replace(self::_Lower() , self::_Upper() , $string);
		}
	}

function check_for_number($str)
	{
	$lenght = strlen($str);
	for ($i = 0; $i < $lenght;)
		{
		if (is_numeric($str[$i++]))
			{
			return true;
			}
		}

	return false;
	}

date_default_timezone_set('Europe/Moscow');
$name = $_POST["f1"];
$koment = $_POST["koment"];
$name = trim($name);
$nameUP = fsStringConverter::ToUpper($name);
$person = $_SERVER['REMOTE_ADDR'];
$person2 = $_SERVER['REMOTE_ADDR'];
$fall = "";

if ($person == "178.34.150.202" || $person == "178.34.150.242")
	{
	$person = "Саня спрашивал";
	$person2 = "Саня писал";
	}

if ($person == "176.120.199.172")
	{
	$person = "Иса спрашивал";
	$person2 = "Иса писал";
	}

if ($person == "77.37.185.219")
	{
	$person = "Админ спрашивал";
	$person2 = "Админ писал";
	}

if ($person == "2.93.140.102")
	{
	$person = "Алексей спрашивал";
	$person2 = "Алексей писал";
	}

$today[1] = date("d-M H:i");
$name_write = "\"" . $name . "\"   #_" . $person . " #_" . $today[1];

if (strcasecmp($koment, $fall) != 0)
	{
	$koment_write = "\"" . $koment . "\"   #_" . $person2 . " #_" . $today[1];
	$fp1 = fopen('poshelania.txt', 'a+');
	$test1 = fwrite($fp1, $koment_write . "\r\n");
	fclose($fp1);
	}

$pic1 = "<img src='g4.gif'>";
$pic2 = "<img src='g5.gif'>";
$pic3 = "<img src='g6.gif'>";
$pic4 = "<img src='g7.gif'>";

if (check_for_number($name) == true || $name == " " || $name == "  " || $name == "   " || $name == "    " || $name == "     " || $name == "      ")
	{
	echo ("<script>location.href='new.html'</script>");
	exit;
	}

$fp = fopen('spisok.txt', 'a+');
$test = fwrite($fp, $name_write . "\r\n");
fclose($fp);
$radio = $_POST['rad'];

if ($radio == "good")
	{
	echo "И почему ты так посчитал?<br/>Может подумаешь еще раз?";
	}

if ($radio == "bad")
	{
	echo "А ты толковый чел. Держи подкидон:";
	$url = 'https://www.youtube.com/watch?v=CHO0cOgZPl4';
	$parsed_url = parse_url($url);
	parse_str($parsed_url['query'], $parsed_query);
	echo '<iframe src="http://www.youtube.com/embed/' . $parsed_query['v'] . '" type="text/html" width="350" height="300" frameborder="0"></iframe>';
	}

if ($radio == "mine")
	{
	if ($nameUP == "ИСА" || $nameUP == "ISA")
		{
		echo ("<script>location.href='isa.html'</script>");
		}

	if ($nameUP == "САНЯ" || $nameUP == "SANYA" || $nameUP == "АЛЕКСАНДР" || $nameUP == "ALEXANDER" || $nameUP == "САНЕК")
		{
		echo "Мальчик пропадает... он тонет...";
		echo $pic1;
		exit;
		}

	if ($nameUP == "OLEXANDER" || $nameUP == "ОЛЕКСАНДР")
		{
		echo "О, вы из Украины?";
		echo $pic2;
		exit;
		}

	//    if($nameUP =="ТАНЯ" || $nameUP =="ТАТЬЯНА" || $nameUP =="TANYA" || $nameUP =="TATYANA")
	//    {
	//        echo "Так и знал...";exit;
	//        }

	if ($nameUP == "РОМА" || $nameUP == "ROMA" || $nameUP == "РОМАН" || $nameUP == "ROMAN")
		{
		echo "Пац, который вечно играет в SAMP и SOULWORKER.. Ну так себе стратовый набор игр..";
		exit;
		}

	if ($nameUP == "АРТУР" || $nameUP == "ARTUR")
		{
		echo "Ты и так знаешь, что он чсв... Любитель дота ММР и вкусного дошика";
		echo "Попробуй угадать его друга.";
		exit;
		}

	if ($nameUP == "ДЕНИС" || $nameUP == "DENIS")
		{
		echo "Да, это денис..";
		exit;
		}

	if ($nameUP == "ДОТА" || $nameUP == "DOTA" || $nameUP == "ДОТКА" || $nameUP == "DOTKA")
		{
		echo "Ты угадал друга Артура)";
		echo $pic3;
		exit;
		}

	if ($nameUP == "САНЯ ЛЕВЫЙ" || $nameUP == "SANYA LEVIY")
		{
		echo "Он как правый";
		echo "Мне кто то еще говорил, что он гниет на помойке";
		exit;
		}

	if ($nameUP == "ПЕТЯ" || $nameUP == "PETYA")
		{
		echo "Да это Петя.. Только у него имя другое..";
		echo '
                                                            <left><form action="petya1.php" method="post">
                                                            <input type="text" name="artem"><br />
                                                            <input type="submit" value="Проверить">
                                                            </form>
                                                            <br />';
		}
	  else
		{
		echo "Эм.. я тебя не знаю. Ливни с сайта";
		exit;
		}
	}

?>
    <p>


        </body>
        </html>
