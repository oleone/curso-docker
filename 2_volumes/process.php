<?php

echo("Carregando...");

$message = $_POST['message'];

$files = scandir('./messages');

$num_files = count($files) - 2;

$fileName = "msg-{$num_files}.txt";

$file = fopen("./messages/{$fileName}", 'x');

fwrite($file, $message);

fclose($file);

// header("Location: index.php");

echo "<script>
    window.location.pathname = '/';
</script>";
