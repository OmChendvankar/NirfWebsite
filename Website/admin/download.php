<?php
    include '../config.php';

    // Retrieve Data
    $tables = ['emp_details', 'phd_details', 'program_master']; // Add your table names here
    $data = [];

    foreach ($tables as $table) {
        $query = "SELECT * FROM $table";
        $result = mysqli_query($conn, $query);
    
        if ($result) {
            $tableData = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $columnNames = array_keys($tableData[0]);
    
            $allData[] = [
                'table' => $table,
                'columns' => $columnNames,
                'data' => $tableData,
            ];
        } else {
            die("<script>alert('Query Failed: " . mysqli_error($conn) . "')</script>");
        }
    }
    
    // Export to CSV
    $csvFile = 'output.csv';
    $file = fopen($csvFile, 'w');
    
    foreach ($allData as $tableData) {
        // Write table name as a comment
        fwrite($file, "# Table: " . $tableData['table'] . PHP_EOL);
    
        // Write column names
        fputcsv($file, array_merge(['table'], $tableData['columns']));
    
        // Write data
        foreach ($tableData['data'] as $row) {
            fputcsv($file, array_merge([$tableData['table']], $row));
        }
    
        // Add an empty line for separation between tables
        fwrite($file, PHP_EOL);
    }
    
    fclose($file);


        // Trigger download
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="output.csv"');
        readfile('output.csv');

        // Delete the file after download if needed
        unlink('output.csv');
?>