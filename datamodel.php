<?php
// diagram.php

function getDatabaseTablesAndRelations($pdo) {
    // Fetch all tables 
    $tablesQuery = $pdo->query("SHOW TABLES");
    $tables = $tablesQuery->fetchAll(PDO::FETCH_COLUMN);

    $relations = [];

    foreach ($tables as $table) {
        // Fetch columns and their relations for each table
        $columnsQuery = $pdo->prepare("
            SELECT 
                COLUMN_NAME, 
                REFERENCED_TABLE_NAME 
            FROM 
                information_schema.KEY_COLUMN_USAGE 
            WHERE 
                TABLE_SCHEMA = :schema 
                AND TABLE_NAME = :table 
                AND REFERENCED_TABLE_NAME IS NOT NULL");
        $columnsQuery->execute(['schema' => 'for_office', 'table' => $table]);
        
        $columns = $columnsQuery->fetchAll(PDO::FETCH_ASSOC);
        $relations[$table] = $columns;
    }

    return $relations;
}

try {
    // Database connection
    $pdo = new PDO('mysql:host=localhost;dbname=for_office', 'root', 'Algo@123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch tables and their relations
    $tablesRelations = getDatabaseTablesAndRelations($pdo);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Relations Diagram</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .table {
            border: 1px solid #333;
            padding: 10px;
            margin: 20px;
            display: inline-block;
            position: relative;
        }
        .relation {
            position: absolute;
            border-left: 2px solid #333;
            height: 50px;
            left: 100px; /* Adjust as needed */
            top: 10px; /* Adjust as needed */
        }
    </style>
</head>
<body>
    <div id="diagram">
        <?php foreach ($tablesRelations as $table => $relations): ?>
            <div class="table" id="<?= $table ?>">
                <strong><?= $table ?></strong><br>
                <?php foreach ($relations as $relation): ?>
                    <span><?= $relation['COLUMN_NAME'] ?> → <?= $relation['REFERENCED_TABLE_NAME'] ?></span><br>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
    
    <script>
        // Optional: Add logic to draw lines or arrows for relationships
    </script>
</body>
</html>
