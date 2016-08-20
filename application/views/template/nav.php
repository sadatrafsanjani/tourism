<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php if ($this->session->userdata('customerId')) { ?>
                <a class="navbar-brand" href="<?= base_url() ?>customers/profile">Profile</a>
            <?php } else { ?>
                <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
            <?php } ?>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?= base_url() ?>visitors/services">Services</a>
                </li>
                <li>
                    <a href="<?= base_url() ?>visitors/contact">Contact</a>
                </li>
                <li>
                    <?php if ($this->session->userdata('customerId')) { ?>
                        <a href="<?= base_url() ?>customers/logout">Logout</a>
                    <?php } else { ?>
                        <a data-toggle="modal" href="#loginModal">Login</a>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </div>
</nav>