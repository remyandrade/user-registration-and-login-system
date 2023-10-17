<?php
include ('../conn/conn.php');

if (isset($_GET['user'])) {
    $user = $_GET['user'];

    try {

        $query = "DELETE FROM `tbl_user` WHERE `tbl_user_id` = '$user'";

        $stmt = $conn->prepare($query);

        $query_execute = $stmt->execute();

        if ($query_execute) {
            echo "
            <script>
                alert('User Deleted Successfully');
                window.location.href = 'http://localhost/user-registration-and-login-system/home.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('User to Delete Subject');
                window.location.href = 'http://localhost/user-registration-and-login-system/home.php';
            </script>
            ";
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>