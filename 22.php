<?php
/**
 * 22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
 */
$a = 'xx';
while (strlen($a) <= 10) {
    echo "$a<br>\n";
    $a .= 'xx';
}