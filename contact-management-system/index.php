<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Management System</title>

    <link rel="stylesheet" href="./style.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <?php
    include "config.php";

    $rawData = mysqli_query($conn, "SELECT * FROM contacts");
    ?>

    <div class="container">
        <nav>
            <h1>Contact Management System</h1>
        </nav>

        <main>
            <div class="title-add">
                <h2>Contact List</h2>
                <a href="newcontact.php"><button class="btn-add"><ion-icon name="add"></ion-icon>New Contact</button></a>
            </div>
            <div class="contacts">
                <table>
                    <tr class="header-row">
                        <th class="id-row">No.</th>
                        <th>Fullname</th>
                        <th>Phone Number</th>
                        <th class="btn-row">Edit</th>
                        <th class="btn-row">Delete</th>
                    </tr>

                    <?php
                    $count = 0;
                    while ($row = mysqli_fetch_array($rawData)) {
                        $count += 1;
                    ?>
                        <tr>
                            <td class='id-row'><?php echo $count; ?>.</td>
                            <td><?php echo $row['fullname']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><a href="update.php?id=<?php echo $row['id']; ?>"><button class='btn-edit'><ion-icon name='create'></ion-icon>Edit</button></a></td>
                            <td><a href="delete.php?id=<?php echo $row['id']; ?>"><button class='btn-delete'><ion-icon name='trash'></ion-icon>Delete</button></a></td>
                        </tr>

                    <?php
                    }
                    if ($count == 0) {
                        echo "
                        <tr class='no-contacts'>
                            <td colspan='5'><p>No contacts available</p></td>
                        </tr>
                        ";
                    }
                    ?>
                </table>
            </div>
        </main>
    </div>
</body>

</html>