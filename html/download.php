<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = escapeshellarg($_POST['url']);
    $quality = escapeshellarg($_POST['quality']);
    $command = "/var/www/html/youtube_downloader.sh $url $quality";
    shell_exec($command);
    echo "Download initiated.";
}
?>

