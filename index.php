<?php
session_start();

$password='neri';
$username='neri';


if ($_SERVER["REQUEST_METHOD"] == 'POST'){

    $inputPass = $_POST['password'];
    $inputUser = $_POST['username'];


    if($inputPass == $password && $inputUser == $username)
    {
        $_SESSION['username'] = $inputUser;
        header('location:index.php');
        exit();
    } else {
        echo "invalid credentials";
    }


}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="logout.php" method="post"><button type="submit">logout</button></form>
    <h2 style="text-align: center;">PHP CRUD Example</h2>
    <a href="form.php" style="margin-left: 20px;">Add New Person</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['age']; ?></td>
                <td>
                    <a href="form.php?edit=<?= $row['id']; ?>">Edit</a>
                    <a href="index.php?delete=<?= $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>