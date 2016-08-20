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
                                Messages
                            </h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <?php
                                if (!isset($messages)) {
                                    echo "Sorry! No Data is loaded";
                                } else {
                                    ?>
                                    <table class="table table-hover table-striped animated fadeInLeft">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($messages as $row) { ?>
                                                <tr>
                                                    <td><?= $row['messageId'] ?></td>
                                                    <td><?= $row['name'] ?></td>
                                                    <td><?= $row['phone'] ?></td>
                                                    <td><?= $row['email'] ?></td>
                                                    <td><?= $row['datetime'] ?></td>
                                                    <td>
                                                        <button class="btn btn-success btn-sm data" title="<?= $row['message'] ?>">View Message</button>

                                                        <a href="<?= base_url() ?>admins/remove_message/<?= $row['messageId'] ?>">
                                                            <button class="btn btn-danger btn-sm">Remove</button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                <?php } ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row text-center">
                            <div class="col-lg-12">
                                <span class="pagination"><?= $pages ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("template/files.php"); ?>
</body>
</html>
