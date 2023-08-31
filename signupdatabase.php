<?php
include("connection.php");

$query = "SELECT * FROM users";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);

// echo $result["password"];


if ($total != 0)
{
    ?>
    <!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: separate;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table border = "3px" style = "background-color = blue">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>#Password</th>
            
        </tr>

        
        


    <?php

    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result["username"]."</td>
                <td>".$result["email"]."</td>
                <td>".$result["password"]."</td>
            </tr>
            ";
    }
}
else
{
    echo " No records found";
}
?>

</table>