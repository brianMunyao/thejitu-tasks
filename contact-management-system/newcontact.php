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
        $address = $_POST['address'];

        if ($firstname == '') {
            $error = "Firstname missing";
        } else if ($lastname == '') {
            $error = "Lastname missing";
        } else if ($phone == '') {
            $error = "Phone Number missing";
        } else if ($email == '') {
            $error = "Email Address missing";
        } else if ($address == '') {
            $error = "Address missing";
        } else {
            mysqli_query($conn, "INSERT INTO contacts (firstname, lastname, phone, email, address) VALUES('$firstname','$lastname','$phone','$email',  '$address')");
            header("location:index.php");
        }
    }
    ?>

    <div class="container">
        <nav>
            <h1>Add New Contact</h1>
        </nav>

        <main>
            <div class="create-form">
                <p class="error"><?php echo $error; ?></p>
                <form action="" method="post">
                    <div>
                        <label for="firstname">First Name *</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Enter the first name">
                    </div>
                    <div>
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Enter the last name">
                    </div>
                    <div>
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter the Email Address">
                    </div>
                    <div>
                        <label for="phone">Phone *</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter the Phone number">
                    </div>
                    <div>
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Enter Address">
                    </div>

                    <button name="submit" type="submit">CREATE</button>
                </form>
            </div>
        </main>
    </div>

</body>

</html>