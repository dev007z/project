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
    <title>Dashboard</title>
</head>

<body>
    <!-- DASHBOARD NAV -->
    <?php $this->load->view('dash/inc/nav'); ?>
    <!-- DASHBOARD NAV -->



    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- SCRIPTS -->
</body>

</html>