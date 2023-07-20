<?php

require_once 'config.php';
// echo "USAO SI NA PLATFORMU! <br>"; 
// var_dump($_SESSION);
if (!isset($_SESSION['admin_id'])) {
    header('location: index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin_Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>

    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h2>Register Member</h2>
                <form action="register_member.php" method="post" enctype="multipart/form-data"></form>
                First Name: <input class="form-control" type="text" name="first_name"><br>
                Last Name: <input class="form-control" type="text" name="last_name"><br>
                Email: <input class="form-control" type="email" name="email"><br>
                Phone Number: <input class="form-control" type="text" name="phone_number"><br>
                Training Plan:
                <select class="form-control" name="training_plan_id">
                    
                </select><br>
                <input type="hidden" name="photo_path" id="photoPathInput"> 
                <div id="dropzone_upload" class="dropzone"></div>

                <input class="btn btn-primary mt-3" type="submit" value="Register Member">
                </form>
            </div>
        </div>
    </div>

</body>

</html>