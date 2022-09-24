<?php
    include '../component/sidebar.php'  
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);" >

    <div class="body d-flex justify-content-between">
        <h4>PROFILE</h4>
    </div>

    <?php

        include '../db.php';
        $userEmail = $_SESSION['user']['email'];
        $_SESSION['oldEmail'] = $userEmail;    
        $query = mysqli_query($con, "SELECT * FROM users WHERE email = '$userEmail'") or die(mysqli_error($con));
        $userData = mysqli_fetch_assoc($query);

        echo
            '<hr>
                <form action="../process/editProcess.php" method="post">          
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control inputstyle" value="'.$userData['name'].'">
                    <br>
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" id="phone" name="phone" class="form-control inputstyle" value="'.$userData['phonenum'].'">
                    <br>
                    <label for="membership" class="form-label">Membership</label>
                    <input type="text" id="membership" name="membership" class="form-control inputstyle" value="'.$userData['membership'].'" disabled>
                    <br>
                    <label for="email" class="form-label">Email</label>
                    <input type="text" id="email" name="email" class="form-control inputstyle" value="'.$userData['email'].'">
                    <br>
                    <button class="btn btn-primary" disabled>Edit</button>
                    <button type="submit" class="btn btn-success" style="float: right" name="save">Save</button>
                </form>
                
            </div>
            </aside>
            <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
            </body>';
    ?>
