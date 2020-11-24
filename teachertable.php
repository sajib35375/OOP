<?php
include_once "vendor/autoload.php";

use App\Controller\Teacher;

$teach = new Teacher;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teacher info</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<?php
    if (isset($_GET['delete_id'])){
        $id = $_GET['delete_id'];

        $msg = $teach -> dataDelete($id);
    }




    ?>
	

	<div class="wrap-table ">

        <a class="btn btn-sm btn-primary" href="teacher.php">Add new Teacher</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Teacher Data</h2>
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

                        $info = $teach -> allData();

                        while ($single_data=$info->fetch_assoc()) :




                    ?>


						<tr>
							<td>1</td>
							<td><?php echo $single_data['name']; ?></td>
							<td><?php echo $single_data['email']; ?></td>
							<td><?php echo $single_data['cell']; ?></td>
							<td><?php echo $single_data['username']; ?></td>
							<td>
								<a class="btn btn-sm btn-info" href="teacherprofile.php?id=<?php echo $single_data['id']; ?>">View</a>
								<a class="btn btn-sm btn-warning" href="teacheredit.php?id=<?php echo $single_data['id']; ?>">Edit</a>
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