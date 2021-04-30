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
            <div class="col-lg-9 col-md-9 mt-3">
                <div class="card">
                    <div class="card-header">
                        Add Employee
                    </div>
                    <div class="card-body">
                        <?php echo form_open('employees/addEmp_process', 'class="form-horizontal"'); ?>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="e_name" class="form-control form-control-sm" placeholder="Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" name="e_email" class="form-control form-control-sm" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="e_phone" class="form-control form-control-sm" placeholder="Phone" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Job</label>
                            <select name="e_job" class="form-control form-control-sm custom-select">
                                <option>Select Job</option>
                                <?php

                                $job_list = $this->db->get_where('jobs', array('j_status' => '1'));
                                foreach ($job_list->result() as $job) {
                                ?>
                                    <option value="<?php echo $job->j_name; ?>"><?php echo $job->j_name; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <input type="submit" name="add_empBtn" class="btn btn-sm btn-success" value="Create Employee">
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