<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>

    <h2>Student Details Form</h2>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:    </label>
        <input type="text" name="name" id="name"><br><br>

        <label for="email">Email ID:</label>
        <input type="email" name="email" id="email"><br><br>

        <label for="address">Address:</label>
        <textarea name="address" id="address" rows="4" cols="50"></textarea><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="male" id="male"> <label for="male">Male</label>
        <input type="radio" name="gender" value="female" id="female"> <label for="female">Female</label><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob"><br><br>

        <input type="submit" name="submit" value="Submit Details">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['address'];
        $gender = $_REQUEST['gender'];
        $dob = $_REQUEST['dob'];

        echo "<h2>Student Details:</h2>";
        echo "Name: $name <br>";
        echo "Email ID: $email <br>";
        echo "Address: $address <br>";
        echo "Gender: $gender <br>";
        echo "Date of Birth: $dob";
    }
    ?>

</body>
</html>
