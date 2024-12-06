<?php
    include('connect.php');

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
        $student = $_POST['student'];
        $birthday = $_POST['birthday'];


        $stmt = $conn->prepare("SELECT id, student, birthday FROM students WHERE student=?");
        $stmt->bind_param("s", $student);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows == 1){
            $user = $result->fetch_assoc();

            if(password_verify($birthday, $user['birthday'])){
                echo "login successful";
            }else{
                echo "Incorrect password";
            }
        }else{
            echo "No user found with that username.";
        }
        $stmt->close();
    }
?>
<form method="POST" action="">
    Student no.: <input type="text" name="student" required><br>
    Password: <input type="password" name="birthday" required><br>
    <button type="submit" name="login">Login</button>
</form>