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
                <div class="card">
                    <div class="card-header">
                        Update Job Details
                    </div>
                    <div class="card-body">
                        <?php echo form_open('jobs/addJob', 'class="form-horizontal"'); ?>
                        <?php 
                            $id = $this->uri->segment(3);
                            $jobs_list = $this->db->get_where('jobs', array('j_id' => $id));
                            foreach ($jobs_list->result() as $job) { ?>
                                <div class="mb-3">
                                    <label class="form-label">Job Name</label>
                                    <input type="text" name="j_name" class="form-control form-control-sm" placeholder="Job Name" required value="<?php echo $job->j_name; ?>">
                                </div>
                            <?php }

                        ?>
                        
                        <input type="submit" name="update_jobBtn" class="btn btn-sm btn-success" value="Update Job">
                        </form>
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