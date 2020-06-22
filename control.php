<?php include_once 'db.php' ?>
<?php
$conn = getConnection();

$data = [];

$readData = "SELECT id, fname, lname FROM names";
$result = $conn->query($readData);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 results";
}


if (isset($_POST['insert'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $insertQuery = "INSERT INTO names (fname, lname) VALUES ('$fname', '$lname')";
    if ($conn->query($insertQuery) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    header("location: index.php");
}

$fnameU = '';
$lnameU = '';
if (isset($_GET['update'])) {

    $readData = "SELECT fname, lname FROM names where id = " . $_GET['id'];
    $result = $conn->query($readData);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $fnameU = $row['fname'];
            $lnameU = $row['lname'];
        }
    } else {
        echo "0 results";
    }
}

if (isset($_POST['updateFinish'])) {
    $fnameUF = $_POST['fname'];
    $lnameUF = $_POST['lname'];
    $idUF = $_POST['id'];
    $updateQuery = "UPDATE names SET fName='$fnameUF', lName='$lnameUF' WHERE id='$idUF'";

    if ($conn->query($updateQuery) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
    header("location: index.php");
}

if (isset($_GET['delete'])) {
    $idD = $_GET['id'];
    $deleteQuery = "DELETE FROM names WHERE id='$idD'";

    if ($conn->query($deleteQuery) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    header("location: index.php");
}

?>