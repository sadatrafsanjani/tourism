<!DOCTYPE html>
<html lang="en">
    <?php require_once("template/head.php"); ?>
    <body>
        <div id="wrapper">
            <?php require_once("template/nav.php"); ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Customer Details
                            </h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                            if (!isset($details)) {
                                echo "Sorry! No Data is loaded";
                            } else {
                                ?>
                                <div class="list-group">
                                    <p class="list-group-item active">
                                        Name: <?= $details['name'] ?>
                                    </p>
                                    <p class="list-group-item">
                                        Email: <?= $details['email'] ?>
                                    </p>
                                    <p class="list-group-item">
                                        Phone: <?= $details['phone'] ?>
                                    </p>
                                    <p class="list-group-item">
                                        Address: <?= $details['address'] ?>
                                    </p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("template/files.php"); ?>
</body>
</html>
