<?php //`git pull`; ?>
<?php
echo exec('whoami'); 
$output = shell_exec('sudo git pull https://github.com/susritourtales/beta.git');
  
echo "<pre>$output</pre>";

//Store the output of the executed command

$output1 =  exec('pwd');

//Print the return value
echo $output1;
?>