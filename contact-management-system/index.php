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
    <div class="container">
        <nav>
            <h1>Contact Management System</h1>
        </nav>

        <main>
            <div class="title-add">
                <h2>Contact List</h2>
                <button class="btn-add"><ion-icon name="add"></ion-icon>New Contact</button>
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
                    <tr>
                        <td class="id-row">1.</td>
                        <td>Carmicheal John</td>
                        <td>0712345678</td>
                        <td><button class="btn-edit"><ion-icon name="create"></ion-icon>Edit</button></td>
                        <td><button class="btn-delete"><ion-icon name="trash"></ion-icon>Delete</button></td>
                    </tr>
                    <tr>
                        <td class="id-row">2.</td>
                        <td>Carmicheal John</td>
                        <td>0712345678</td>
                        <td><button class="btn-edit"><ion-icon name="create"></ion-icon>Edit</button></td>
                        <td><button class="btn-delete"><ion-icon name="trash"></ion-icon>Delete</button></td>
                    </tr>
                </table>
            </div>
        </main>
    </div>
</body>

</html>