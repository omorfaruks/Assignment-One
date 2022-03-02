<h1> Class 4 </h1>
=======================================
<h2>If Statement (If/ Else/ Ternary/ Null Coalscing)</h2>

<h3>If else condition</h3>
<?php
   $age = 28;

   if ($age >= 18){
    echo "<h5 style=\"color:green\">Your age is kay</h5>";
   } else{
    echo "<h5 style=\"color:red\">Your age is not kay</h5>";
   }
?>

<h3> Ternary Condition </h3>
<?php
   $age = 28;
   echo $age >=30 ? "<h5 style=\"color:green\">Your age is kay</h5>" :  "<h5 style=\"color:green\">Your age is not kay</h5>";
?>

<h3> Null Coalescing </h3>
<?php
  echo $name ?? 'not found';
?>
<br/>
<br/>
================================
<h2>If else </h2>

<h3> Switch </h3>

<?php
  $amount = 120;
  $type ='won';
  

  $rate = 0;
  if( $type == "dollar" ){
    $rate = 85.35;
  }else if( $type == 'pound' ){
    $rate = 116;
  }else if( $type == 'euro' ){
      $rate = 95;
  }else if( $type == 'won' ){
    $rate = 0.071;
  }

$bdt = $amount * $rate;
echo "{$amount} {$type} = {$bdt} BDT"
?>

<br/>
<br/>
================================
<h2>Switch case (Switch / Case)</h2>

<h3> Switch </h3>

<?php
$amount = 500;
$type = 'won';

switch($type){
    case 'dollar' :
    $rate = 85;
    break;
  
    case 'pound' :
        $rate = 116;
        break;
    case 'euro' :
        $rate = 95;
        break;

    case 'won' :
        $rate = 0.071;
        break;

    default :
        $rate = 0;
        break;
}

$bdt = $amount * $rate;
echo "{$amount} = {$bdt}";

?>
<br/>
<br/>
<?php

$marks = 36;

switch ($marks){
    case $marks >= 0 && $marks < 40 :
    $result = 'Marks F';
    break;

    case $marks >= 40 && $marks < 50 :
    $result =  'D';
    break;

}
echo $result;
?>


<br/>
<br/>
================================
<h2>Variables value</h2>

<h3> Undefine /Empty / Flag/ Null / Array </h3>
<?php

$name = [];
echo $name;
?>


<br/>
<br/>
================================
<h2>Form Function</h2>

<h3> Isset / Empty / Die </h3>
<?php

if(isset($name)){
echo 'Value Set';
}else{
    echo 'Value not Set';
}
?>

<?php
$name = '';

if(empty($name)){
    echo "value is empty";
}else{
    echo "value is not empty";
}
?>
<br/>
<br/>
<?php
echo "working PH <br/>" ;
echo "working PH <br/>" ;
die('R bolbo na');
echo "working PH <br/>" ;
echo "working PH <br/>" ;
echo "working PH <br/>" ;
echo "working PH <br/>" ;
echo "working PH <br/>" ;
echo "working PH <br/>" ;

?>