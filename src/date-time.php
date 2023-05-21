<?php
// Get the current date and time
$dateTime = date('Y-m-d H:i:s');

// Create the response data
$response = array(
    'datetime' => $dateTime
);

// Send the response as JSON
echo json_encode($response);
?>