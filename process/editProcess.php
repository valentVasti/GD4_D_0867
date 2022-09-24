<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya

if(isset($_POST['save'])){
    // untuk mengoneksikan dengan database dengan memanggil file db.php
    include('../db.php');
    // tampung nilai yang ada di from ke variabel
    // sesuaikan variabel name yang ada di registerPage.php disetiap input
    session_start();
    $id = $_SESSION['user']['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phonenum = $_POST['phone'];
    $membership = $_SESSION['user']['membership'];

    $queryCheckEmail = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($con));
    $queryCheckPhone = mysqli_query($con, "SELECT * FROM users WHERE phonenum = '$phonenum'") or die(mysqli_error($con));

        $query = mysqli_query($con,
        "UPDATE users SET email = '$email', name = '$name', phonenum ='$phonenum' WHERE id = '$id';")
            or die(mysqli_error($con));

        if($query){
            echo
                '<script>
                alert("Edit Success");
                window.location = "../page/profilePage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Edit Failed");
                </script>';
        }

    }else{
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>