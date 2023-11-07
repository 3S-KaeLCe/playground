<?php
system("ls -al");
$filePath = './index.php';

// Check if the file exists
if (file_exists($filePath)) {
    // Read the content of the file
    $content = file_get_contents($filePath);

    // Encode the content in base64
    $base64Content = base64_encode($content);

    // Display the base64-encoded content
    echo $base64Content;
} else {
    echo "The file does not exist.";
}
?>
