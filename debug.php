<?php
// Debug script to check server configuration
echo "<h1>Apache Debug Information</h1>";
echo "<p><strong>REQUEST_URI:</strong> " . $_SERVER['REQUEST_URI'] . "</p>";
echo "<p><strong>SCRIPT_NAME:</strong> " . $_SERVER['SCRIPT_NAME'] . "</p>";
echo "<p><strong>DOCUMENT_ROOT:</strong> " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
echo "<p><strong>HTTP_HOST:</strong> " . $_SERVER['HTTP_HOST'] . "</p>";
echo "<p><strong>SERVER_NAME:</strong> " . $_SERVER['SERVER_NAME'] . "</p>";
echo "<p><strong>Current Directory:</strong> " . getcwd() . "</p>";
echo "<p><strong>Files in current directory:</strong></p>";
echo "<ul>";
foreach (scandir('.') as $file) {
    echo "<li>" . $file . "</li>";
}
echo "</ul>";
?>
