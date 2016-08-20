<!DOCTYPE html>
<html lang="en">
    <?php require_once("template/head.php"); ?>
    <body>
        <?php require_once("template/nav.php"); ?>
        <div class="container top-margin">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Available Packages
                    </h1>
                </div>
            </div>
            <div class="row">
                <?php
                if (!isset($packages)) {
                    echo "<p>Not Found</p>";
                } else {
                    foreach ($packages as $row) {
                        ?>
                        <div class="col-md-4">
                            <div class="panel panel-primary text-center">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <?php
                                        if ($row['packageId'] == 1) {
                                            echo "Premium";
                                        } else if ($row['packageId'] == 2) {
                                            echo "Gold";
                                        } else if ($row['packageId'] == 3) {
                                            echo "Silver";
                                        }
                                        ?>
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <span class="price">$<?= $row['costing'] ?></span>
                                    <span class="period">per person</span>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <?php
                                        if ($row['packageId'] == 1) {
                                            echo "By Air";
                                        } else if ($row['packageId'] == 2) {
                                            echo "By Train/Bus";
                                        } else if ($row['packageId'] == 3) {
                                            echo "By Bus";
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">
                                        <?php
                                        if ($row['packageId'] == 1) {
                                            echo "Five Star Hotel";
                                        } else if ($row['packageId'] == 2) {
                                            echo "Three Star Motel";
                                        } else if ($row['packageId'] == 3) {
                                            echo "Normal Lodge";
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">
                                        <?php
                                        if ($row['packageId'] == 1) {
                                            echo "Double Beaded Room";
                                        } else if ($row['packageId'] == 2) {
                                            echo "Semi-Double Room";
                                        } else if ($row['packageId'] == 3) {
                                            echo "Single Room";
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">
                                        <?php
                                        if ($row['packageId'] == 1) {
                                            echo "Breakfast Served";
                                        } else if ($row['packageId'] == 2) {
                                            echo "Fruit Served";
                                        } else if ($row['packageId'] == 3) {
                                            echo "Water";
                                        }
                                        ?>
                                    </li>
                                    <li class="list-group-item">
                                        And Much More!
                                    </li>
                                    <li class="list-group-item">
                                        <?php if ($this->session->userdata('customerId')) { ?>
                                            <?php if ($row['packageId'] == 1) { ?>
                                                <a  data-toggle="modal" href="#checkoutModal" class="btn btn-primary">Book Now!</a>
                                            <?php } else if ($row['packageId'] == 2) { ?>
                                                <a  data-toggle="modal" href="#checkoutModal" class="btn btn-danger">Book Now!</a> 
                                            <?php } else if ($row['packageId'] == 3) {
                                                ?>
                                                <a  data-toggle="modal" href="#checkoutModal" class="btn btn-warning">Book Now!</a>
                                            <?php }
                                            ?>

                                        <?php } else { ?>
                                            <a data-toggle="modal" href="#signupModal" class="btn btn-primary">Sign Up</a>
                                        <?php }
                                        ?>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <hr>
            <?php require_once("template/footer.php"); ?>
        </div>
        <?php require_once("template/files.php"); ?>
    </body>
</html>
