<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<title>Login - Employee Management System</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 col-push-4 mx-auto mt-4">
                <div class="wrapper fadeInDown" id="loginForm">
                    <div id="formContent">
                        <div class="fadeIn first">
                            <img src="<?php echo base_url(); ?>assets/img/logo.png" id="icon" alt="Logo" />
                        </div>

                        <!-- Login Form -->
                        <!-- form open to create a form in codeigniter using the form helper in autoload, url parameter specifies the action -->
                        <?php echo form_open('home/login'); ?>
                        <input type="text" class="fadeIn second" name="u_name" placeholder="Username" required>
                        <input type="password" class="fadeIn third" name="u_pass" placeholder="Password" required>
                        <input type="submit" class="fadeIn fourth" name="u_login" value="Login as Admin" required>
                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container">
        <div class="row">
            <div class="col-4 col-push-4 mx-auto">
                <div class="card mt-5">
                     LOGIN form 
                    <div class="card-header">Login</div>
                    <div class="card-body">
                         form open to create a form in codeigniter using the form helper in autoload, url parameter specifies the action 
                        <?php echo form_open('home/login'); ?>
                        <div class="form-group">
                            <input type="text" name="u_name" placeholder="Username" required class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <input type="password" name="u_pass" placeholder="Password" required class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="u_login" value="Login as Admin" required class="btn btn-primary btn-sm">
                            <a href="<?php echo site_url('home/register'); ?>" class="btn btn-warning btn-sm">Register</a>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div> -->