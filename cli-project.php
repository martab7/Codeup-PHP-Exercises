<?php

function addContact($newContact) {
  $filename = 'contacts.txt';
  $handle = fopen($filename, 'a');
  fwrite($handle, $newContact . PHP_EOL);
  fclose($handle);
}
//
// function searchContact(&$friends, $name) {
//     $filtered = [];
//     foreach ($friends as $friend) {
//         if (strpos($friend['name'], $name) !== false) {
//           $filtered[] = $friend;
//         }
//     }
//     return $filtered;
// }
//
// function deleteContact($filename) {
//
// }


function parseContacts($filename) {
    $contacts = [];

    $thisFilename = "{$filename}";
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

do {
    echo '1. View contacts.', PHP_EOL;
    echo '2. Add a new contact.', PHP_EOL;
    echo '3. Search a contact by name.', PHP_EOL;
    echo '4. Delete an existing contact.', PHP_EOL;
    echo '5. Exit.', PHP_EOL;
    $option = fgets(STDIN);

    switch ($option) {
        case 1:
            $allContacts = parseContacts('contacts.txt');
            print_r($allContacts);
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
            $name = trim(fgets(STDIN));
            var_dump(searchContact($filename, $name));
            break;
        case 4:
            break;
          }
} while ($option != 5);
