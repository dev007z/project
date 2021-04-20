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
                <div class="card">
                    <div class="card-header">
                        Update Employee
                    </div>
                    <div class="card-body">

                        <?php

                        $emp_details = $this->db->get_where('employees', array('e_id' => $id));
                        foreach ($emp_details->result() as $emp) { ?>

                            <?php echo form_open('employees/updateEmp_process/' . $id, 'class="form-horizontal"'); ?>
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="e_name" class="form-control form-control-sm" placeholder="Name" value="<?php echo $emp->e_name; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" name="e_email" class="form-control form-control-sm" placeholder="Email" value="<?php echo $emp->e_email; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="e_phone" class="form-control form-control-sm" placeholder="Phone" value="<?php echo $emp->e_phone; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Position</label>
                                <input type="text" name="e_job" class="form-control form-control-sm" value="<?php echo $emp->e_job; ?>">
                            </div>
                            <input type="submit" name="update_empBtn" class="btn btn-sm btn-success" value="Update Employee">
                            </form>

                        <?php
                        }

                        ?>
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