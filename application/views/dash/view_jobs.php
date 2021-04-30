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
    <div class="container-fluid">
        <div class="row">
            <!-- SIDEBAR -->
            <?php $this->load->view('dash/inc/sidebar'); ?>
            <!-- SIDEBAR -->


                <!-- DASHBOARD DATA -->
                <div class="col-md-9 col-lg-10 mt-3">
                    <div class="row">
                        <div class="col">
                            <h2>Jobs</h2>
                        </div>
                        <div class="col">
                            <form action="" class="form-horizontal">
                                <div class="row">
                                    <div class="col-8">
                                        <input type="search" name="emp_search" id="emp_search" class="form-control" placeholder="Job Name">
                                    </div>
                                    <div class="col-4">
                                        <input type="button" value="Search" class="btn btn-block btn-success">
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $jobs_list = $this->db->get_where('jobs', array('j_status'=>'1'));
                                foreach ($jobs_list->result() as $job) { ?>
                                    <tr>
                                        <td><?php echo $job->j_name; ?></td>
                                        <td><a href="<?php echo site_url() ?>jobs/updateJob/<?php echo $job->j_id; ?>" class="btn btn-warning btn-sm btn-block">Edit</a></td>
                                        <td><a href="<?php echo site_url() ?>jobs/deleteJob/<?php echo $job->j_id; ?>" class="btn btn-danger btn-sm btn-block">Delete</a></td>
                                    </tr>
                                <?php }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- DASHBOARD DATA -->
        </div>
    </div>
    <!-- DASHBOARD DATA -->

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SCRIPTS -->
</body>

</html>