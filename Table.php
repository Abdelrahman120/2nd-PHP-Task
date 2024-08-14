<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
$Data = file('Data.txt');
echo "<h1 class='text-center'>Data</h1>";
if ($Data){
    echo "<table class='table'> 
            <tr>
                <th>ID</th>
                <th>Frist Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Skills</th>
                <th>User Name</th>
                <th>Password</th>
                <th>Department</th>
                <th>Delete</th>
            </tr>";

foreach ($Data as $D){
    $D = trim($D);
    $Arr = explode(":", $D);
    echo "<tr>";
    foreach ($Arr as $cell) {
        echo "<td> {$cell} </td>";
    }
    echo "<td><a href='Table.php?Id=$Arr[0]' class='btn btn-danger'>Delete</a></td>
    <tr>";
    
}

if (isset($_GET['Id'])) {
    $idToDelete = $_GET['Id'];
    $data2 = file('Data.txt');
    $lastData = [];

    foreach ($data2 as $val) {
        $fields = explode(":", trim($val));
        if ($fields[0] !== $idToDelete) {
            $lastData[] = $val;
        }
    }
    file_put_contents('Data.txt', implode($lastData));
} 
}
?>