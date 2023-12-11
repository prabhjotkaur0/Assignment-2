<?php
include 'connect.php';

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $image = $_FILES['file'];

    // Hash the password using password_hash
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Create the 'images' directory if it doesn't exist
    $upload_directory = 'images/';
    if (!is_dir($upload_directory)) {
        mkdir($upload_directory, 0755, true);
    }

    $imagefilename = $image['name'];
    $imagefiletemp = $image['tmp_name'];

    $filename_separate = explode('.', $imagefilename);
    $file_extension = strtolower(end($filename_separate));

    $allowed_extensions = array('jpeg', 'jpg', 'png');

    if (in_array($file_extension, $allowed_extensions)) {
        $upload_image = $upload_directory . $imagefilename;
        move_uploaded_file($imagefiletemp, $upload_image);

        // Use prepared statements to prevent SQL injection
        $sql = "INSERT INTO `account` (name, email, mobile, hashedPassword, cpassword, image) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $mobile, $hashedPassword, $cpassword, $upload_image);
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                echo "Data inserted successfully";
            } else {
                die(mysqli_error($con));
            }

            mysqli_stmt_close($stmt);
        } else {
            die(mysqli_error($con));
        }
    } else {
        echo "Invalid file format. Allowed formats: jpeg, jpg, png";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Register</title>
</head>
<body>
    <?php include 'templates/header.php'; ?>

    <section class="section1">
        <div class="polaroid1 pop-element">
            <img src="img/polaroid4.png" alt="">
        </div>
        <div class="section1_1">
            <h1 style="margin-top:1vw ;" class="signupText pop-element">Sign Up</h1><br>

            <div class="form-container">
                <!-- Sign Up Form -->
                <form class="signup" action="signup.php" method="POST" enctype="multipart/form-data">
                    <label for="name">Username:</label>
                    <input type="text" name="name" placeholder="Username" required><br>

                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="Email" required><br>

                    <label for="mobile">Mobile:</label>
                    <input type="tel" id="mobile" name="mobile" required="required" maxlength="10" minlength="10"><br>

                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Password" required><br>

                    <label for="cpassword">Confirm Password:</label>
                    <input type="password" name="cpassword" placeholder="Password" required>

                    <label for="image">Image:</label>
                    <input type="file" id="image" name="file"><br>

                    <button type="submit" name="signup">Sign Up</button><br>
                </form>
            </div>
        </div>
    </section>

    <?php include 'templates/footer.php'; ?>
</body>
</html>
