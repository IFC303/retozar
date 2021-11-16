<?php
$dbHost = "localhost";
$dbName = "disc";
$dbChar = "utf8";
$dbUser = "root";
$dbPass = "toor";

try {
    $pdo = new PDO(
        "mysql:host=" . $dbHost . ";dbname=" . $dbName . ";charset=" . $dbChar,
        $dbUser, $dbPass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (Exception $ex) {
    exit($ex->getMessage());
}

$fh = fopen($_FILES["upcsv"]["tmp_name"], "r");
if ($fh === false) {
    exit("Error al abrir el archivo");
}

$stmt = $pdo->prepare("SET FOREIGN_KEY_CHECKS = 0");
$stmt->execute();
$stmt = $pdo->prepare("TRUNCATE `preguntas`");
$stmt->execute();
$stmt = $pdo->prepare("SET FOREIGN_KEY_CHECKS = 1");
while (($row = fgetcsv($fh)) !== false) {
    try {
        $stmt = $pdo->prepare("INSERT INTO `preguntas` (`term`, `desc`, `color`) VALUES (?, ?, ?)");
        $stmt->execute([$row[0], $row[1], $row[2]]);
    } catch (Exception $ex) {
        echo $ex->getmessage();
    }
}
fclose($fh);
echo "IMPORTADO.";
