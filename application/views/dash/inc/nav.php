<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand text-capitalize" href="<?php echo site_url('dash'); ?>">Hi, <small><?php echo $_SESSION['u_name']; ?></small></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>home/logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>