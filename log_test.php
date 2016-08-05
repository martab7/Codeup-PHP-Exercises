<?php
require_once('Log.php');

$log = new Log();
$log->setFilename($log->getFilename());

echo $log->info('Info');
echo $log->error('Error');

?>
