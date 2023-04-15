 <?php
    require "config.php";
    $id = $_GET['id'];

    $raw_data = mysqli_query($conn, "DELETE FROM contacts WHERE id=$id");

    header("location:index.php");
