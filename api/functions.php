<?php

// Function to read data from the CSV file
function read_csv($filename) {
    $data = [];
    if (($handle = fopen($filename, 'r')) !== FALSE) {
        fgetcsv($handle); // Skip the header row
        while (($row = fgetcsv($handle)) !== FALSE) {
            $data[] = $row;
        }
        fclose($handle);
    }
    return $data;
}

// Function to write data to the CSV file
function write_csv($filename, $data) {
    if (($handle = fopen($filename, 'w')) !== FALSE) {
        fputcsv($handle, ['username', 'password']); // Write the header row
        foreach ($data as $row) {
            fputcsv($handle, $row);
        }
        fclose($handle);
    }
}

// Function to register a new user
function register_user($username, $password) {
    $filename = 'users.csv';
    $data = read_csv($filename);

    // Check if username already exists
    foreach ($data as $row) {
        if ($row[0] === $username) {
            return false; // Username already taken
        }
    }

    // Add new user
    $data[] = [$username, password_hash($password, PASSWORD_DEFAULT)];
    write_csv($filename, $data);

    return true;
}

// Function to authenticate a user
function authenticate_user($username, $password) {
    $filename = 'users.csv';
    $data = read_csv($filename);

    foreach ($data as $row) {
        if ($row[0] === $username && password_verify($password, $row[1])) {
            return true; // Authentication successful
        }
    }

    return false; // Authentication failed
}
?>
