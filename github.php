<?php //`git pull`; ?>
<?php
  
// Use ls command to shell_exec
// function
//$output = shell_exec('git pull');
  
// Display the list of all file
// and directory
//echo "<pre>$output</pre>";

//Store the output of the executed command

$output1 =  exec('pwd');

//Print the return value

echo $output1;

echo "<br/>";

//Store the last line of the executed command

$output2 = exec('ls -la');

//Print the return value

echo $output2;
?>