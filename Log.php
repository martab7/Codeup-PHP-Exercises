<?php
class Log
{
  private $filename;
  private $handle;

  private function __construct($prefix='log'){
    $date = new DateTime();
    $this->filename = (string)$prefix . '-' . $date->format('Y-m-d') . '.log';
    if(is_writable($this->getFilename()){
      $this->handle = fopen($this->getFilename(), 'a');
    } else {
      fwrite('Cannot create log file.');
    }
  }

  public function __desctruct(){
    fclose($this->getHandle());
  }

  public function logMessage($logLevel, $message) {
    $date = new DateTime();
    $entry = $date->format('Y-m-d H:i:s') . " " . $logLevel . " ". $message . "\n";
    echo $entry;
    fwrite($this->getHandle(), PHP_EOL . $entry);
  }

  public function info($message) {
    $this->logMessage('Info', $message);
  }

  public function error($message) {
    $this->logMessage('Error', $message);
  }

  public function setFilename($filename){
    $this->filename = trim((string) $filename);
  }

  public function getHandle() {
    return $this->handle;
  }

  public function getFilename(){
    return $this->filename;
  }
}

?>
