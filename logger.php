<?php

function logMessage($logLevel, $message)
{
  $filename = 'log-2016-07-11.log';
  $handle = fopen($filename, 'a');

  $date = new DateTime();
  $entry = $date->format('Y-m-d H:i:s') . $logLevel . $message . "\n";
  echo $entry;
  fwrite($handle, PHP_EOL . $entry);
  fclose($handle);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");
