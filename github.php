<?php //`git pull`; ?>
<?php

$output = exec('cd /var/www/html/public/beta && git pull');
  
echo "<pre>$output</pre>";

//Store the output of the executed command

$output1 =  exec('pwd');

//Print the return value
echo $output1;
?>