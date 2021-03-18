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
            <div class="col-lg-3 col-md-3">
                <div class="card">
                    <div class="card-header">
                        Employees Actions
                    </div>
                    <div class="list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">Employees List</a>
                        <a href="#" class="list-group-item list-group-item-action">Register Employee</a>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">
                        Jobs Actions
                    </div>
                    <div class="list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">Jobs List</a>
                        <a href="#" class="list-group-item list-group-item-action">Add Jobs</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9"></div>
        </div>
    </div>
    <!-- DASHBOARD DATA -->

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SCRIPTS -->
</body>

</html>