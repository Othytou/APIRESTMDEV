<?php

// Include any necessary dependencies or configuration here

// Define a function to handle API endpoints
function handleApiRequest($requestUri)
{
    // Define a map of API endpoints to view files
    $apiEndpoints = [
        'all_books/' => 'views/listing.php',
        'add_book/' => 'views/add.php',
        // Add more API endpoints and corresponding view files as needed
    ];

    // Check if the requested API endpoint exists in the map
    if (array_key_exists($requestUri, $apiEndpoints)) {
        $viewFile = $apiEndpoints[$requestUri];

        // Check if the view file exists
        if (file_exists($viewFile)) {
            // Include the view file
            include $viewFile;
        } else {
            http_response_code(404);
            echo "View file not found.";
        }
    } else {
        http_response_code(404);
        echo "API endpoint not found.";
    }
}

// Get the requested URL path
$requestUri = $_SERVER['REQUEST_URI'];

// Remove query string (if present) from the URL
$requestUri = strtok($requestUri, '?');

// Call the function to handle API requests
handleApiRequest($requestUri);
