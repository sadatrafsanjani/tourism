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
                                Visits
                            </h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <?php
                                if (!isset($visits)) {
                                    echo "Sorry! No Data is loaded";
                                } else {
                                    ?>
                                    <table class="table table-hover table-striped animated slideInLeft">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Destination</th>
                                                <th>State</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($visits as $row) { ?>
                                                <tr>
                                                    <td><?= $row['visitId'] ?></td>
                                                    <td><?= $row['destination'] ?></td>
                                                    <td>
                                                        <?php if (!$row['active']) { ?>
                                                            <a href="<?= base_url() ?>admins/activate/<?= $row['visitId'] ?>">
                                                                <button class="btn btn-success btn-sm">Activate</button>
                                                            </a>
                                                        <?php } else { ?>
                                                            <a href="<?= base_url() ?>admins/inactivate/<?= $row['visitId'] ?>">
                                                                <button class="btn btn-danger btn-sm">Inactivate</button>
                                                            </a>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url() ?>admins/preview/<?= $row['visitId'] ?>">
                                                            <button class="btn btn-warning btn-sm">Edit</button>
                                                        </a>
                                                        <a href="<?= base_url() ?>admins/remove_visit/<?= $row['visitId'] ?>">
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
