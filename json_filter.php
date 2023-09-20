<?php
// Read the Firebase backup file
$jsonData = file_get_contents('database-backup-2023-09-11 21_01_29.json');

// Parse the JSON data
$data = json_decode($jsonData, true);

// Iterate through the data to identify and delete unwanted objects
foreach ($data['Mac'] as $key => $macObject) {
    if ($macObject['account_status'] === 'FREE TRIAL' || $macObject['account_status'] === 'EXPIRED') {
        unset($data['Mac'][$key]);
    }
}

// Serialize the modified data back to JSON
$modifiedJsonData = json_encode($data);

// Write the modified data back to a new file
file_put_contents('mysql_backup.json', $modifiedJsonData);

echo 'Unwanted objects have been removed and saved to firebase_backup_modified.json';
?>
