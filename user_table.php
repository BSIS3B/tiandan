<?php 
include 'controller/get_all_user.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<style>
table, th, td {
    border: 2px solid;
    border-color: #00CCCC;
    color: #9999FF;
}
table{
    width: 40%;
    height: 45vh;
    
}
</style>
<center>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Section</th>
                <th>Department</th>

            </tr>
        </thead>
        <tbody>
        <?php while ($row = mysqli_fetch_assoc($results)) { ?>
        <tr>
            <td>
                <?php echo $row['Fname']; ?> <?php echo $row['Mname']; ?> <?php echo $row['Lname']; ?>
            </td>
            <td>
                <?php echo $row['Section']; ?>
            </td>
            <td>
                <?php echo $row['Dept']; ?>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
<center>
</html>