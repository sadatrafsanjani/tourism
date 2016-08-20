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
                                Transactions
                            </h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <?php
                                if (!isset($transactions)) {
                                    echo "Sorry! No Data is loaded";
                                } else {
                                    ?>
                                    <table class="table table-hover table-striped animated fadeInLeft">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Customer</th>
                                                <th>Bank</th>
                                                <th>A/C No.</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($transactions as $row) { ?>
                                                <tr>
                                                    <td><?= $row['transactionId'] ?></td>
                                                    <td>
                                                        <a href="<?= base_url() ?>admins/customer_details/<?= $row['customerId'] ?>">
                                                            <button class="btn btn-primary btn-sm">Customer</button>
                                                        </a>
                                                    </td>
                                                    <td><?= $row['bank'] ?></td>
                                                    <td><?= $row['account_number'] ?></td>
                                                    <td><?= $row['datetime'] ?></td>
                                                    <td>
                                                        <a href="<?= base_url() ?>admins/remove_transaction/<?= $row['transactionId'] ?>">
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
