<?php

function parseContacts($filename)
{
    $contacts = [];

    $thisFilename = "{$filename}";
    $handle = fopen($thisFilename, 'r');
    $contents = fread($handle, filesize($thisFilename));
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
    array_pop($contacts);
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
