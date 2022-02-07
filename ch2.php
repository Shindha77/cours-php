<?php

$message1 = "0@sn9sirppa@#?ia’jgtvryko1";
$lenght = mb_strlen($message1) /2;
$substring = mb_substr($message1, 5, $lenght);
$replace = str_replace('@#?', ' ', $substring);
$answer = strrev($replace);

echo $answer;
?>
<br>
<?php

$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$lenght = mb_strlen($message2) /2;
$substring = mb_substr($message2, 5, $lenght);
$replace = str_replace('@#?', ' ', $substring);
$answer = strrev($replace);

echo $answer;
?>
<br>
<?php

$message3 = "aopi?sgnirts@#?sedhtg+p9l!";
$lenght = mb_strlen($message3) /2;
$substring = mb_substr($message3, 5, $lenght);
$replace = str_replace('@#?', ' ', $substring);
$answer = strrev($replace);

echo $answer;
?>