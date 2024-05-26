<?php
include('ReadScript.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Faculty</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        <?php if (count($fetchedData) > 0) {
            $counter = 1;
            foreach ($fetchedData as $data) {
        ?>
        <tr>
            <td><?php echo $counter; ?></td>
            <td><?php echo htmlspecialchars($data['name']); ?></td>
            <td><?php echo htmlspecialchars($data['email']); ?></td>
            <td><?php echo htmlspecialchars($data['phone']); ?></td>
            <td><?php echo htmlspecialchars($data['faculty']); ?></td>
            <td><?php echo htmlspecialchars($data['gender']); ?></td>
            <td>
                <a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a>
                <a href="update.php?edit=<?php echo $data['id']; ?>">Update</a>
            </td>
        </tr>
        <?php
                $counter++;
            }
        } else {
            echo '<tr><td colspan="7">No Data Available!!!</td></tr>';
        }
        ?>
    </table>
    <button><a href="add.php">Add</a></button>
</body>
</html>