<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS | Add New Contact</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    require "config.php";
    $error = '';

    if (isset($_POST['submit'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        mysqli_query($conn, "INSERT INTO contacts (firstname, lastname, phone, email) VALUES('$firstname','$lastname','$phone','$email')");
        header("location:index.php");
    }
    ?>

    <div class="container">
        <nav>
            <div>
                <a href="/jitu-tasks/contact-management-system/">
                    <img src="./contact-logo.png" alt="logo">
                </a>
                <h1>Add New Contact</h1>
            </div>
            <span></span>
        </nav>

        <main>
            <div class="create-form">
                <p class="error"><?php echo $error; ?></p>
                <form action="" method="post">
                    <div>
                        <label for="firstname">First Name *</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Enter the first name" required>
                    </div>
                    <div>
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Enter the last name" required>
                    </div>
                    <div>
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter the Email Address" required>
                    </div>
                    <div>
                        <label for="phone">Phone *</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter the Phone number" required>
                    </div>

                    <button name="submit" type="submit">CREATE</button>
                </form>
            </div>
        </main>
    </div>

</body>

</html>