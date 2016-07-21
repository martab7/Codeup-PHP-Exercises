<?php
require_once('Log.php');

$log = new Log();
$log->filename = 'cli-2016-07-11.log';

echo $log->logMessage("INFO", $log->info());
echo $log->logMessage("ERROR", $log->error());

?>
