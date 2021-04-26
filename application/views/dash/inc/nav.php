<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand text-capitalize" href="<?php echo site_url('dash'); ?>">Hi, <?php echo $_SESSION['u_name']; ?></a>
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
</nav> -->

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow sticky-top">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0 text-capitalize" href="<?php echo site_url('dash'); ?>">Hi, <?php echo $_SESSION['u_name']; ?></a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="<?php echo site_url(); ?>home/logout">Log Out</a>
        </li>
    </ul>
</nav>