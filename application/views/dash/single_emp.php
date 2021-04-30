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
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
</head>


<body>
    <!-- DASHBOARD NAV -->
    <?php $this->load->view('dash/inc/nav'); ?>
    <!-- DASHBOARD NAV -->

    <!-- DASHBOARD DATA -->
    <div class="container-fluid">
        <div class="row">
            <!-- SIDEBAR -->
            <?php $this->load->view('dash/inc/sidebar'); ?>
            <!-- SIDEBAR -->

            <div class="col-lg-9 col-md-9">
                <div class="row py-5 px-4" id="profile">
                    <div class="col-md-5 mx-auto">
                        <!-- Profile widget -->
                        <?php

                        $emp_details = $this->db->get_where('employees', array('e_id' => $id));
                        foreach ($emp_details->result() as $emp) {

                        ?>
                            <div class="bg-white shadow rounded overflow-hidden">
                                <div class="px-4 pt-0 pb-4 cover">
                                    <div class="media align-items-end profile-head">
                                        <div class="profile mr-3"><img src="<?php echo site_url() . $emp->e_photo; ?>" alt="profile" width="130" class="rounded mb-2 img-thumbnail">
                                            <a href="<?php echo site_url() ?>employees/updateEmployee/<?php echo $emp->e_id; ?>" class="btn btn-outline-dark btn-sm btn-block btn-warning">Edit</a>
                                            <a href="<?php echo site_url() ?>jobs/deleteJob/<?php echo $emp->e_id; ?>" class="btn btn-outline-dark btn-sm btn-block btn-danger">Delete</a>
                                        </div>
                                        <div class="media-body mb-5 text-white">
                                            <h4 class="mt-0 mb-0"><?php echo $emp->e_name; ?></h4>
                                            <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i><?php echo $emp->e_job; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 mt-5">
                                    <h5 class="mb-0">About</h5>
                                    <div class="p-4 rounded shadow-sm bg-light">
                                        <p class="font-italic mb-0">Email: <?php echo $emp->e_email; ?></p>
                                        <p class="font-italic mb-0">City: <?php echo $emp->e_city; ?></p>
                                        <p class="font-italic mb-0">Phone: <?php echo $emp->e_phone; ?></p>
                                        <p class="font-italic mb-0">Date of Employment: <?php echo $emp->e_date; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
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