<!DOCTYPE html>
<html>

<head>
<title>Database In-Memory</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h1>Database In-Memory</h1>

<?php

function checkErrorStatus($commandNumber, $result, $db) {
 if ($result === false) {
  // Retrieve error code and text message
  $errorCode = $db->lastErrorCode();
  $errorMessage = $db->lastErrorMsg();
  echo "SQL error (Code $errorCode): $errorMessage";
 } else {
  echo "Command #$commandNumber Executed.<br>\n";
 }
}

if (class_exists('SQLite3')) {
    $db = new SQLite3(':memory:');
    
    $multiline = <<<EOD
    CREATE TABLE catDetails (name VARCHAR(20) NOT NULL PRIMARY KEY, age FLOAT);
    INSERT INTO catDetails (name, age) VALUES ('Bud', 1.5), ('Dizzy', 2.3);
    EOD;
    $result = $db->exec($multiline);
    checkErrorStatus ("1", $result, $db);

    $stmt = $db->prepare('UPDATE catDetails SET age=:age WHERE name=:name');
    $stmt->bindValue(':age', 1.8, SQLITE3_FLOAT);
    $stmt->bindValue(':name', 'Bud', SQLITE3_TEXT);
    $result = $stmt->execute();
    if ($result) {
     echo "Rows updated: " . $db->changes() . "<br>\n";
    } else {
     echo "Update failed: " . $db->lastErrorMsg() . "<br>\n";
    }
    $stmt->close();

    $result = $db->query("SELECT * FROM catDetails;");
    checkErrorStatus ("2", $result, $db);
    $allRows = [];
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
     $allRows[] = $row;
    }
    print_r($allRows);

    $db->close();
}

?>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>

