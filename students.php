<?php
include_once "vendor/autoload.php";

use App\Controller\Student;

$stu = new Student;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student info</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<?php
    if (isset($_GET['delete_id'])){
        $id = $_GET['delete_id'];

        $msg = $stu -> dataDelete($id);
    }




    ?>
	

	<div class="wrap-table ">

        <a class="btn btn-sm btn-primary" href="index.php">Add new</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Student Data</h2>
                <?php
                if (isset($msg)){
                    echo $msg;
                }
                ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>username</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                    <?php

                        $info = $stu -> allData();

                        while ($single_data=$info->fetch_assoc()) :




                    ?>


						<tr>
							<td>1</td>
							<td><?php echo $single_data['name']; ?></td>
							<td><?php echo $single_data['email']; ?></td>
							<td><?php echo $single_data['cell']; ?></td>
							<td><?php echo $single_data['username']; ?></td>
							<td>
								<a class="btn btn-sm btn-info" href="profile.php?id=<?php echo $single_data['id']; ?>">View</a>
								<a class="btn btn-sm btn-warning" href="edit.php?id=<?php echo $single_data['id']; ?>">Edit</a>
								<a class="btn btn-sm btn-danger" href="?delete_id=<?php echo $single_data['id']; ?>">Delete</a>
							</td>
						</tr>

						<?php endwhile; ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>