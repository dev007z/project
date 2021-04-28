<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Employees</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>Employees">
                    View Employees
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url(); ?>Employees/addEmployee">
                    Add Employees
                </a>
            </li>


            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Jobs</span>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url(); ?>jobs/viewJobs">
                        View Jobs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('jobs'); ?>">
                        Add Jobs
                    </a>
                </li>
            </ul>
    </div>
</nav>