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
          private static function _Lower()
          {
            return array(
                'q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m', 'ё','й','ц','у','к','е','н','г','ш','щ','з','х','ъ','ф','ы','в','а','п','р','о','л','д','ж','э','я','ч','с','м','и','т','ь','б','ю');
          }
              private static function _Upper()
          {
            return array(
                'Q','W','E','R','T','Y','U','I','O','P','A','S','D','F','G','H','J','K','L','Z','X','C','V','B','N','M', 'Ё','Й','Ц','У','К','Е','Н','Г','Ш','Щ','З','Х','Ъ','Ф','Ы','В','А','П','Р','О','Л','Д','Ж','Э','Я','Ч','С','М','И','Т','Ь','Б','Ю');
                }
          public static function ToUpper($string)
          {
            return str_replace(self::_Lower(), self::_Upper(), $string);
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

        $name_artem = $_POST["artem"];
        $name_artem = trim($name_artem);
        $nameUP = fsStringConverter::ToUpper($name_artem);

        if ($nameUP == "АРТЕМ" || $nameUP == "ARTEM")
        	{
        	echo "Похоже ты его друг. Но знаешь ли ты его прозвище знаменитое?";
        	echo '
                    <left><form action="petya2.php" method="post">
                    <input type="text" name="proz"><br />
                    <input type="submit" value="Проверить">
                    </form>
                    <br />';
        	}
          else
        	{
        	echo "Эм.. я тебя не знаю. Ливни с сайта";
        	exit;
        	}

        ?>
            <p>

            </body>
            </html>
