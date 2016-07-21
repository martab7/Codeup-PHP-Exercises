<?php
require_once('Log.php');

$log = new Log();
$log->filename = 'cli';

echo $log->logMessage("INFO", $log->info());
echo $log->logMessage("ERROR", $log->error());

?>
