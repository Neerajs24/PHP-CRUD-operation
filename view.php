<?php 

include "config.php";

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>users</h2>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th>First Name</th>

        <th>Last Name</th>

        <th>Email</th>

        <th>Gender</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['first_name']; ?></td>

                    <td><?php echo $row['last_name']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['gender']; ?></td>

                    <td>
                        <button class="btn btn-info"><a  href="update.php?id=<?php echo $row['id']; ?>" class="text-light">Edit</a>&nbsp;
                        </button>
                        <button class="btn btn-danger"><a  href="delete.php?id=<?php echo $row['id']; ?>" class="text-light">Delete</a>
                        </button>
                    </td>

                    </tr>                      

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>