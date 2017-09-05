

<?php


function myFloats($str) {

  if(preg_match("#([0-9\.]+)#", $str, $match)) { // search for number that may contain '.'
    return floatval($match[0]);
  } else {
    return floatval($str); // take some last chances with floatval
  }
}




$file="outputemotion.txt";
$linecount = 0;
$handle = fopen($file, "r");
while(!feof($handle)){
  $line = fgets($handle);
  $linecount++;
}

fclose($handle);
 
 
 //ANGRY

function getangry() {

echo  '[';
for ($line = 6; $line <= $linecount; $line += 18) {
    //echo "line: $line <br>";
$file = new SplFileObject('outputemotion.txt');
//this is zero based so need to subtract 1
$file->seek($line-1);
//now print the line



echo myFloats($file->current()).', ';


} 



}

//angry
$fp = fopen('angry.txt', 'w');


fwrite($fp,$linecount);

fwrite($fp,"\n");



fwrite($fp,'[');
echo  '[';
for ($line = 6; $line <= $linecount; $line += 18) {
    //echo "line: $line <br>";
$file = new SplFileObject('outputemotion.txt');
//this is zero based so need to subtract 1
$file->seek($line-1);
//now print the line


fwrite($fp, myFloats($file->current()));
fwrite($fp,',');

echo myFloats($file->current()).', ';


} 
  echo "0]<br> <P><P>";
  
  
  fwrite($fp, '0]');
fclose($fp);
  ////SAD
  
  
  
$fp = fopen('sad.txt', 'w');
fwrite($fp,$linecount);

fwrite($fp,"\n");
fwrite($fp,'[');
  
  echo  '[';
for ($line = 10; $line <= $linecount; $line += 18) {
    //echo "line: $line <br>";
$file = new SplFileObject('outputemotion.txt');
//this is zero based so need to subtract 1
$file->seek($line-1);
//now print the line

fwrite($fp, myFloats($file->current()));
fwrite($fp,',');

echo myFloats($file->current()).', ';


} 
  echo "0]<br> <P><P>";
  
  fwrite($fp, '0]');
fclose($fp);



////SURPRISED

$fp = fopen('surprised.txt', 'w');
fwrite($fp,$linecount);

fwrite($fp,"\n");
fwrite($fp,'[');
  
  echo  '[';
for ($line = 14; $line <= $linecount; $line += 18) {
    //echo "line: $line <br>";
$file = new SplFileObject('outputemotion.txt');
//this is zero based so need to subtract 1
$file->seek($line-1);
//now print the line

fwrite($fp, myFloats($file->current()));
fwrite($fp,',');

echo myFloats($file->current()).', ';


} 
  echo "0]<br> <P><P>";

fwrite($fp, '0]');
fclose($fp);


////HAPPY
  

$fp = fopen('happy.txt', 'w');

fwrite($fp,$linecount);

fwrite($fp,"\n");
fwrite($fp,'[');


  echo  $linecount.'<br>'.'[';
for ($line = 18; $line <= $linecount; $line += 18) {
    //echo "line: $line <br>";
$file = new SplFileObject('outputemotion.txt');
//this is zero based so need to subtract 1
$file->seek($line-1);
//now print the line


fwrite($fp, myFloats($file->current()));
fwrite($fp,',');


echo myFloats($file->current()).', ';


} 
  echo "0]<br> <P><P>";
fwrite($fp, '0]');
fclose($fp);




//to do generer 4 fichiers txt
?>