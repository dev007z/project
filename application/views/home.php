<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<title>Login - Employee Management System</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 col-push-4 mx-auto">
                <div class="card mt-5">
                    <!-- LOGIN form -->
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <!-- form open to create a form in codeigniter using the form helper in autoload, url parameter specifies the action -->
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
    </div>