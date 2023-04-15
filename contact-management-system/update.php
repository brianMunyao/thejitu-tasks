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

        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];

        if ($fullname == '') {
            $error = "Fullname missing";
        } else if ($phone == '') {
            $error = "Phone number missing";
        } else {
            mysqli_query($conn, "UPDATE contacts SET fullname='$fullname', phone='$phone' WHERE id=$id");
            header("location:index.php");
        }
    }
    ?>

    <div class="container">
        <nav>
            <h1>Update Contact</h1>
        </nav>

        <main>
            <div class="create-form">
                <p class="error"><?php echo $error; ?></p>
                <form action="" method="post">
                    <div>
                        <label for="fullname">Fullname</label>
                        <input type="text" id="fullname" name="fullname" placeholder="Enter their name" value="<?php echo $data['fullname']; ?>">

                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" placeholder="Enter their phone number" value="<?php echo $data['phone']; ?>">
                    </div>

                    <button name="submit" type="submit">UPDATE</button>
                </form>
            </div>
        </main>
    </div>

</body>

</html>