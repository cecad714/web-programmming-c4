<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_no = $_POST['bookno'];
    $title = $_POST['booktitle'];
    $edition = $_POST['book_ed'];
    $publisher = $_POST['bookpub'];

    $sql = "INSERT INTO book_details (book_no, title, edition, publisher) VALUES ('$book_no', '$title', '$edition', '$publisher')";

    if ($conn->query($sql) === TRUE) {
        echo "Book information successfully added.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$result = $conn->query("SELECT * FROM book_details");
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<br>

<h3>All Books:</h3>
<table>
    <tr>
        <th>Book Number</th>
        <th>Title</th>
        <th>Edition</th>
        <th>Publisher</th>
    </tr>
    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['book_no'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['edition'] . "</td>";
        echo "<td>" . $row['publisher'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
