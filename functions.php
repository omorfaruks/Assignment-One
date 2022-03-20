<?php
    /**
     * Headling
     */

function headLine($title = null, $type = 'h1', $fs = null,  $color = '#000', $font = 'impact', $align = 'center'){
return "<{$type} style='font-size:{$fs}; color:{$color}'; font-family:{$font};text-align:{$align};>{$type}</{$type}>";

}

?>

<br/>
<br/>



<?php
    /**
     * Hat function
     */

function hat($type = '1', $text = null){
    $text_type = '';
    
    switch($type){
        case 'u':
            $text_type = "uppercase";
            break;

        case 'l':
            $text_type = "lowercase";
            break;

        default :
            $text_type = 'lowercase';
            break;

    }
    echo "<span style='text-transform:{$text_type};'>{$text}</span>";
}
?>

<br/>
<br/>


<?php
    /**
     * age calculate
     */

function ageCals(string $name, int $year){
    $age = 2022 - $year;
    echo "I am {$name} & I am {$age} years old";
}

?>

<br/>
<br/>
<?php
    function devs(){
        return "I am PHP new developer";

    }

?>


<br/>
<br/>

<?php

function info (string $name = null, string $skill = null, int $age = null){
if( $name){
    echo "My name is {$name} <br/>";
}

if( $skill ){
    echo "My name is {$skill} <br/>";
}
if( $age){
    echo "My name is {$age} <br/>";
}
   
}
?>
