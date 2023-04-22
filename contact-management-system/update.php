<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS | Update Contact</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    require "config.php";
    $error = '';
    $id = $_GET['id'];

    $raw_data = mysqli_query($conn, "SELECT * FROM contacts WHERE id=$id");
    $data = mysqli_fetch_array($raw_data);


    if (isset($_POST['submit'])) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        mysqli_query($conn, "UPDATE contacts SET firstname='$firstname', lastname='$lastname',phone='$phone', email='$email' WHERE id=$id");
        header("location:index.php");
    }
    ?>

    <div class="container">
        <nav>
            <div>
                <a href="/jitu-tasks/contact-management-system/">
                    <img src="./contact-logo.png" alt="logo">
                </a>
                <h1>Update Contact</h1>
            </div>
            <span></span>
        </nav>

        <main>
            <div class="create-form">
                <p class="error"><?php echo $error; ?></p>
                <form action="" method="post">
                    <div>
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Enter the first name" value="<?php echo $data['firstname']; ?>" required>
                    </div>
                    <div>
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Enter the last name" value="<?php echo $data['lastname']; ?>" required>
                    </div>
                    <div>
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter the Email Address" value="<?php echo $data['email']; ?>" required>
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter the Phone number" value="<?php echo $data['phone']; ?>" required>
                    </div>
                    <button name="submit" type="submit">UPDATE</button>
                </form>
            </div>
        </main>
    </div>

</body>

</html>