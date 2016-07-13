<?php

function addContact($newContact) {
  $filename = 'contacts.txt';
  $handle = fopen($filename, 'a');
  fwrite($handle, $newContact . PHP_EOL);
  fclose($handle);
}

function searchContact(&$allContacts, $nameSearch) {
    foreach ($allContacts as $contact) {
        if (strpos($contact['name'], $nameSearch) !== false) {
          return $contact;
        }
    }
}

function deleteContact(&$allContacts, $nameDelete) {
  $contactToBeDeleted = searchContact($allContacts, $nameDelete);
  $contactString = implode('|', $contactToBeDeleted);

  $contents = file_get_contents('contacts.txt');
  $contents = str_replace($contactString, '', $contents);
  file_put_contents('contacts.txt', trim($contents));
  // $key = array_search($contactToBeDeleted, $allContacts);
  // echo $key;
  // unset($allContacts[$key]);
}


function parseContacts($filename) {
    $contacts = [];

    $thisFilename = "{$filename}";
    clearstatcache();
    $handle = fopen($thisFilename, 'r');
    $contents = trim(fread($handle, filesize($thisFilename)));
    $list = explode("\n", $contents);

    foreach ($list as $contact) {
      $info = explode("|", $contact);
      $indContact = [
        'name' => $info[0],
        'number' => $info[1]
      ];
      $contacts[] = $indContact;
    };

    fclose($handle);
    return $contacts;
}

function maxPadName($allContacts) {
  $max = -1;
  foreach ($allContacts as $contact) {
      $length = strlen($contact['name']);
      $max = max($max, $length);
  }
  return $max;
}

function maxPadNumber($allContacts) {
  $max = -1;
  foreach ($allContacts as $contact) {
      $length = strlen($contact['number']);
      $max = max($max, $length);
  }
  return $max;
}
function displayContacts($allContacts) {
  $padName = maxPadName($allContacts) + 1;
  $padNumber = maxPadNumber($allContacts);
  $all = $padName + $padNumber + 5;
  echo str_pad("Name", $padName, " ", STR_PAD_BOTH) . "| " . str_pad("Phone Number", $padNumber, " ", STR_PAD_BOTH) . " |", PHP_EOL;
  echo str_pad("_", $all, "_", STR_PAD_BOTH), PHP_EOL;

  foreach ($allContacts as $contact) {
    echo str_pad($contact['name'], $padName) . "| " . str_pad($contact['number'], $padNumber) . " |", PHP_EOL;
  }
}

do {
    echo '1. View contacts.', PHP_EOL;
    echo '2. Add a new contact.', PHP_EOL;
    echo '3. Search a contact by name.', PHP_EOL;
    echo '4. Delete an existing contact.', PHP_EOL;
    echo '5. Exit.', PHP_EOL;
    $option = fgets(STDIN);
    $allContacts = parseContacts('contacts.txt');

    switch ($option) {
        case 1:
            // print_r($allContacts);
            echo displayContacts($allContacts);
            break;
        case 2:
            echo 'Please enter a name: ';
            $newContactName = trim(fgets(STDIN));
            echo "Please enter {$newContactName}'s number: ";
            $newContactNumber = trim(fgets(STDIN));
            $newContact = "{$newContactName}|{$newContactNumber}";
            addContact($newContact);
            break;
        case 3:
            echo 'Please enter a name: ';
            $nameSearch = trim(fgets(STDIN));
            $namesFiltered = searchContact($allContacts, $nameSearch);
            print_r($namesFiltered);
            break;
        case 4:
            echo 'Please enter a name to be deleted: ';
            $nameDelete = trim(fgets(STDIN));
            deleteContact($allContacts, $nameDelete);
            break;
          }
} while ($option != 5);
