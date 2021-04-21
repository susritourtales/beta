<?php //`git pull`; ?>
<?php
 
$output = exec('git pull');
  
echo "<pre>$output</pre>";

//Store the output of the executed command

$output1 =  exec('pwd');

//Print the return value
echo $output1;
?>