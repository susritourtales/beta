<?php //`git pull`; ?>
<?php

$output = shell_exec('cd /var/www/html/public/beta && /usr/bin/git pull 2>&1');
  
echo "<pre>$output</pre>";

//Store the output of the executed command

$output1 =  exec('pwd');

//Print the return value
echo $output1;
?>