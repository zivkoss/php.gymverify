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
<html>

<head>
    <title>Admin_Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>

    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h2>Register Member</h2>
                <form action="register_member.php" method="post" enctype="multipart/form-data">
                First Name: <input class="form-control" type="text" name="first_name"><br>
                Last Name: <input class="form-control" type="text" name="last_name"><br>
                Email: <input class="form-control" type="email" name="email"><br>
                Phone Number: <input class="form-control" type="text" name="phone_number"><br>
                Training Plan:
                <select class="form-control" name="training_plan_id">
                     <option value="" disabled selected>Training Plan</option>
                     <option value="1">12 sessions plan</option>
                     <option value="2">30 sessions plan</option>
                </select><br>
                <input type="hidden" name="photo_path" id="photoPathInput">

                <div id="dropzone-upload" class="dropzone"></div>

                <input class="btn btn-primary mt-3" type="submit" value="Register Member">
                </form>
            </div>
        </div>
    </div>

</body>
</html>