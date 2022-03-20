<?php

/**
 * strlen
 * str_word_count
 * strrev
 * strtolower
 * strtoupper
 * ucfirst
 * ucwords
 * strpos
 * substr
 * 
 * 
 */

$name = "Omar Faruk";
echo substr ($name, '2');

?>
<br/>
<br/>

<?php

/**
 * strlen
 * str_word_count
 * strrev
 * strtolower
 * strtoupper
 * ucfirst
 * ucwords
 */
$name = "omar faruk and I am PHP developer";
echo ucwords ($name);

?>
<br/>
<br/>

<?php

/**
 * strlen
 * str_word_count
 * strrev
 * strtolower
 * strtoupper
 * ucfirst
 */
$name = "omar faruk and I am PHP developer";
echo ucfirst ($name);

?>
<br/>
<br/>

<?php

/**
 * strlen
 * str_word_count
 * strrev
 * strtolower
 * strtoupper
 */
$name = "Omar Faruk and I am PHP developer";
echo strtoupper ($name);

?>
<br/>
<br/>

<?php

/**
 * strlen
 * str_word_count
 * strrev
 * strtolower
 */
$name = "Omar Faruk and I am PHP developer";
echo strtolower ($name);

?>
<br/>
<br/>
<?php

/**
 * strlen
 * str_word_count
 * strrev
 */
$name = "Omar Faruk and I am PHP developer";
echo strrev ($name);

?>
<br/>
<br/>
<?php

/**
 * strlen
 * str_word_count
 */
$name = "Omar Faruk and I am PHP developer";
echo str_word_count ($name);

?>
<br/>
<br/>

<?php

/**
 * strlen
 * 
 */
$name = "Omar Faruk";
echo strlen ($name);

?>
<br/>
<br/>
<?php
for( $i=1; $i <= 1000; $i++ ){
    if ( $i >= 100 && $i <= 300 && $i % 11 == 0){
        echo "Loop valu = {$i} <br>";
    }
}

?>
<br/>
<br/>


