<?php
    require 'dbcon.php';
?>

<?php include('includes/header.php'); ?>

<div class="container mt-5">

    <div class="row">
        <div class="col-md-12 centered-image " >
            <img src="image/mariabanner.jpg" class="img-fluid" alt="..." style=" height: 300px !important;">
        </div>
   </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="add-student-heading">Student Details
                        <a href="student-create.php" class="btn-btn-primary float-end">Add Students</a>
                    </h4>
                </div>
                <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Student Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Course</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM students";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $student)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $student['id']; ?></td>
                                        <td><?= $student['name']; ?></td>
                                        <td><?= $student['email']; ?></td>
                                        <td><?= $student['phone']; ?></td>
                                        <td><?= $student['course']; ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<h5> No Record Found </h5>";                            
                            }

                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>

