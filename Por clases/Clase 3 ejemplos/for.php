<?php
/**
The first expression (expr1) is evaluated (executed) once unconditionally at the beginning of the loop.

In the beginning of each iteration, expr2 is evaluated. If it evaluates to TRUE,
the loop continues and the nested statement(s) are executed.
If it evaluates to FALSE, the execution of the loop ends.

At the end of each iteration, expr3 is  executed.
*/


/* example 1 */

for ($i = 1; $i <= 10; $i++) {
    echo $i ."<br>";
}

/* example 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i ."<br>";
}

/* example 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo $i ."<br>";
    $i++;
}

/* example 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
?>
