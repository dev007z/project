<?php
defined('BASEPATH') or exit('No direct script access allowed');

//check if session is not set
if (!$_SESSION['u_name']) {

    redirect('home', 'refresh');
}

$id = $this->uri->segment(3);

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
                    <?php

                    $emp_details = $this->db->get_where('employees', array('e_id' => $id));
                    foreach ($emp_details->result() as $emp) {

                    ?>
                        <tr>
                            <th>Date</th>
                            <td><?php echo $emp->e_date; ?></td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><?php echo $emp->e_name; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo $emp->e_email; ?></td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td><?php echo $emp->e_phone; ?></td>
                        </tr>
                        <tr>
                            <th>Job</th>
                            <td><?php echo $emp->e_job; ?></td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="<?php echo site_url() ?>jobs/deleteJob/<?php echo $emp->e_id; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo site_url() ?>jobs/deleteJob/<?php echo $emp->e_id; ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }

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