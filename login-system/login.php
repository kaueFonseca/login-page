<?php

session_start();

include "db_user.php";

    if(isset($_POST['uame']) && isset($_POST['password'])){

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;

        }
        
        $uame = validate($_POST['uame']);
        $pass = validate($_POST['password']);

        if(empty($uame)){
            header("Location: index.php?error=User Name is required");
            exit();

        }else if(empty($pass)){
            header("Location: index.php?error=Password is required");
            exit();
        }else{
            $sql = "SELECT * FROM users WHERE user_name='$uame' AND password='$pass'";


            $result= mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['user_name']=== $uame && $row['password'] === $pass){
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: home.php");
                    exit();
                }else{
                        header("Location: index.php?error=Nome ou Senha incorretos");
                        exit();
                    }

            }else{
                header("Location: index.php?error=erro no login");
                exit();
            }
        }
    }else{
        header("Location: index.php");
        exit();
    }
?>