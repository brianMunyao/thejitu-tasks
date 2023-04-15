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
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];

        if ($fullname == '') {
            $error = "Fullname missing";
        } else if ($phone == '') {
            $error = "Phone number missing";
        } else {
            mysqli_query($conn, "INSERT INTO contacts (fullname, phone) VALUES('$fullname', '$phone')");
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
                        <label for="fullname">Fullname</label>
                        <input type="text" id="fullname" name="fullname" placeholder="Enter their name">

                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter their phone number">
                    </div>

                    <button name="submit" type="submit">CREATE</button>
                </form>
            </div>
        </main>
    </div>

</body>

</html>