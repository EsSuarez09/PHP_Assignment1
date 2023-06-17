<?php
session_start();
?>

<?php include('includes/header.php'); ?>

<div class="container mt-5">

    <?php include('message.php'); ?>
    <div class="row">
        <div class="col-md-12 centered-image " >
            <img src="image/mariabanner.png" class="img-fluid" alt="..." style=" height: 300px !important;">
        </div>
   </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student Add
                        <a href="index.php" class="btn btn-danger float-end">VIEW STUDENTS</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">

                        <div class="mb-3">
                            <label>Student Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Student Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Student Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Student Course</label>
                            <input type="text" name="course" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                        </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include('includes/footer.php'); ?>