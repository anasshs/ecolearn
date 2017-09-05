 <?php
  



$remarque='<a href="line.html">Click here</a>';


print($remarque);





$fileName = 'line.html';
$lineNumber = 10;

//calculat nbr of x

$changeTo = file_get_contents('angry.txt', FILE_USE_INCLUDE_PATH);

//print ($changeTo);

$pieces = explode("\n", $changeTo);
$changeT=$pieces[1];
//echo $pieces[1]; // output: piece3 piece4 piece5 piece6

$d = 'angry.txt';
//$changeTo = "the changed line\n\r";

// Load file into array
$contents = file($fileName);


$line = '';
$f = fopen($d, 'r');
$line = fgets($f); // read until first newline
$nbrsave=$line;
$val=$nbrsave/ 18 ;
$val= floor($val);
//print($val);





//print($interval[1]);
function data($val) {
    $interval = range(1, $val);
    return   $interval;
}

$data = data($val);
$commasaprated = implode(',' , $data);
//print_r($commasaprated);



$contents[$lineNumber-1] =   "var angry = { x:[".$commasaprated."],".' y  :'.$changeT.","."type: 'scatter'"."};";

// Implode and save
file_put_contents($fileName, implode('',$contents));



//end

$fileName = 'line.html';
$lineNumber = 17;


$changeTo = file_get_contents('happy.txt', FILE_USE_INCLUDE_PATH);
//$changeTo = "the changed line\n\r";
$pieces = explode("\n", $changeTo);
$changeT=$pieces[1];
// Load file into array
$contents = file($fileName);

// Replace line
$contents[$lineNumber-1] =  "var happy = {x:[".$commasaprated."],".'y :'.$changeT.","."type: 'scatter'"."};";

// Implode and save
file_put_contents($fileName, implode('',$contents));



//end



$fileName = 'line.html';
$lineNumber = 21;


$changeTo = file_get_contents('sad.txt', FILE_USE_INCLUDE_PATH);
//$changeTo = "the changed line\n\r";
$pieces = explode("\n", $changeTo);
$changeT=$pieces[1];
// Load file into array
$contents = file($fileName);

// Replace line
$contents[$lineNumber-1] = "var sad = { x:[".$commasaprated."],". 'y :'.$changeT.","."type: 'scatter'"."};";

// Implode and save
file_put_contents($fileName, implode('',$contents));

//end

$fileName = 'line.html';
$lineNumber = 27;


$changeTo = file_get_contents('surprised.txt', FILE_USE_INCLUDE_PATH);
//$changeTo = "the changed line\n\r";
$pieces = explode("\n", $changeTo);
$changeT=$pieces[1];
// Load file into array
$contents = file($fileName);

// Replace line
$contents[$lineNumber-1] =  "var surprised = { x:[".$commasaprated."],".'y :'.$changeT.","."type: 'scatter'"."};";

// Implode and save
file_put_contents($fileName, implode('',$contents));

 ?>