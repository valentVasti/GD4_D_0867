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
        $userId = $_SESSION['user']['id'];
    
        $query = mysqli_query($con, "SELECT * FROM users WHERE id = '$userId'") or die(mysqli_error($con));
        $userData = mysqli_fetch_assoc($query);

        echo
            '<hr>
                <form action="../page/editPage.php" method="post">          
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" class="form-control inputstyle" placeholder="'.$userData['name'].'" disabled>
                    <br>
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" id="phone" class="form-control inputstyle" placeholder="'.$userData['phonenum'].'" disabled>
                    <br>
                    <label for="membership" class="form-label">Membership</label>
                    <input type="text" id="membership" class="form-control inputstyle" placeholder="'.$userData['membership'].'" disabled>
                    <br>
                    <label for="email" class="form-label">Email</label>
                    <input type="text" id="email" class="form-control inputstyle" placeholder="'.$userData['email'].'" disabled>
                    <br>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
            </aside>
            <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
            </body>';
    ?>
