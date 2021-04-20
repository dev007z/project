<?php
defined('BASEPATH') or exit('No direct script access allowed');

//check if session is not set
if (!$_SESSION['u_name']) {

    redirect('home', 'refresh');
}


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <title>Dashboard - Employee Management System</title>
</head>

<body>
    <!-- DASHBOARD NAV -->
    <?php $this->load->view('dash/inc/nav'); ?>
    <!-- DASHBOARD NAV -->

    <!-- DASHBOARD DATA -->
    <div class="container mt-3">
        <div class="row">
            <!-- SIDEBAR -->
            <?php $this->load->view('dash/inc/sidebar'); ?>
            <!-- SIDEBAR -->
            <div class="col-lg-9 col-md-9">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    $emp_list = $this->db->get('employees');
                    foreach ($emp_list->result() as $emp) { ?>
                        <tr>
                            <td><?php echo $emp->e_id; ?></td>
                            <td><?php echo $emp->e_name; ?></td>
                            <td><a href="<?php echo site_url() ?>employees/singleEmployee/<?php echo $emp->e_id; ?>" class="btn btn-primary btn-sm btn-block">Details</a></td>
                            <td><a href="<?php echo site_url() ?>jobs/deleteJob/<?php echo $emp->e_id; ?>" class="btn btn-danger btn-sm btn-block">Delete</a></td>
                        </tr>
                    <?php }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- DASHBOARD DATA -->

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SCRIPTS -->
</body>

</html>