<?php
// Get the current script name
$currentScript = $_SERVER['SCRIPT_NAME'];

// Extract the page name from the script name
$pageName = basename($currentScript, '.php');

// List of page names where you want to add the class
$pagesWithClass = array(
    'stragtegy-for-success-detailed-by-ceo',
    // ... add the remaining specific page names here
);

// Determine the appropriate class for the current page
if (in_array($pageName, $pagesWithClass)) {
    $bodyClass = 'dark-header';
} else {
    $bodyClass = '';
}
?>