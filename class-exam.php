<h1>Currency Converter</h1>
===========================
<br/>
<br/>
<?php
$amount = 500;
$type = 'india';

switch($type){
    case 'india' :
    $rate = 1.13;
    break;

    case 'UK' :
    $rate = 114.42;
    break;

    case 'Euro' :
     $rate = 95.56;
     break;

     case 'Australian' :
    $rate = 63.26;
    break;

    default :
    $rate = 0;
    break;
}

$bdt = $amount * $rate;
echo " $ {$amount} = {$bdt} TK";

?>

<br/>
<br/>
<h1>Result Check - (GPA $ Grade - If else)</h1>
===========================
<br/>
<br/>
<?php
    $marks = 90;

    if($marks >= 0 && $marks <= 32){
        echo "<h5> F Grade</h5>";
    }else if ($marks >= 33 && $marks < 40){
        echo "<h5> D Grade</h5>";
    }else if($marks >= 40 && $marks < 60){
        echo "<h5> D Grade</h5>";
    }else if ($marks >= 60 && $marks < 70){
        echo "<h5> C Grade</h5>";
    }else if($marks >= 70 && $marks < 80){
        echo "<h5> B Grade</h5>";
    } else if($marks >= 80 && $marks < 90){
        echo "<h5> A Grade</h5>";
    }else if($marks >= 90 && $marks < 100){
        echo "<h5> A+ Grade</h5>";
    } else{
        echo "<h5> Invalid Result</h5>";
    }


?>

<br/>
<br/>
<h1>Marriage Age Checker</h1>
===========================
<br/>
<br/>
<?php
$age = 21;
$type = 'Male';

if($age >= 19){
    echo "This man should be married";
}else{
    echo "This man should not be married";
}
?>
<br/>
<br/>
<?php
$age = 18;
$type = 'Femle';

if($age >= 19){
    echo "This female should be married";
}else{
    echo "This female should not be married";
}
?>