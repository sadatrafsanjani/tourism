<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= base_url() ?>admins">Home</a>
    </div>
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $this->session->userdata('employeeName') ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="<?= base_url() ?>admins/profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="<?= base_url() ?>admins/settings"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="<?= base_url() ?>admins/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="<?= base_url() ?>admins"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?= base_url() ?>admins/customers"><i class="fa fa-fw fa-male"></i> Customers</a>
            </li>
            <li>
                <a href="<?= base_url() ?>admins/messages"><i class="fa fa-fw fa-comment"></i> Messages</a>
            </li>
            <li>
                <a href="<?= base_url() ?>admins/transactions"><i class="fa fa-fw fa-money"></i> Transactions</a>
            </li>
            <li>
                <a href="<?= base_url() ?>admins/visits"><i class="fa fa-fw fa-tree"></i> Visits</a>
            </li>
        </ul>
    </div>
</nav>