<?php

require_once 'config.php';
                
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
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
</head>

<body>


    <?php if (isset($_SESSION['success_message'])) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php
            echo $_SESSION['success_message'];
            unset($_SESSION['success_message']);
            ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>


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

                        <?php
                        $sql = "SELECT * FROM  training_plans";
                        $run = $conn->query($sql);
                        $results = $run->fetch_all(MYSQLI_ASSOC);

                        foreach ($results as $result) {
                            echo "<option value='" . $result['plan_id'] . "'>" . $result['name'] . "</option>";
                        }

                        ?>

                    </select><br>


                    <input type="hidden" name="photo_path" id="photoPathInput">

                    <div id="dropzone-upload" class="dropzone"></div>

                    <input class="btn btn-primary mt-3" type="submit" value="Register Member">
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity=""></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    
    <script>
        Dropzone.options.dropzoneUpload = {
            url: "uplod_photo.php",
            paramName: "photo",
            maxFilesize: 20, // MB
            acceptedFiles: "image/*",
            init: function () {
                this.on("success", function (file, response) {
                    // Parse the JSON response
                    const jsonResponse = JSON.parse(response);
                    // Check if the file was uploaded successfuly
                    if (jsonResponse.success) {
                        // Set the hidden input's value to the uploaded file's path
                        document.getElementById('photoPathInput').value = jsonResponse.photo_path;
                   } else {
                     conole.error(jsonResponse.error);
                   }
                });
            }
        };
    </script>

</body>
</html>