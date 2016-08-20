<!DOCTYPE html>
<html lang="en">
    <?php require_once("template/head.php"); ?>
    <?php require_once("template/nav.php"); ?>
    <body>
        <div class="container top-margin">
            <div class="row">
                <div class="col-lg-12">
                    <?php
                    if (!isset($service)) {
                        ?>
                        <h1 class="page-header">Page Not Found</h1>
                    <?php } else { ?>
                        <h1 class="page-header">Details of <?= $service['destination'] ?></h1>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <?php
                if (!isset($service)) {
                    echo "<p>Not Found</p>";
                } else {
                    ?>
                    <div class="col-lg-12">
                        <img class="img-responsive animated rollIn" src="<?= base_url() ?>uploads/places/<?= $service['image'] ?>" alt="">
                        <h3><?= $service['destination'] ?></h3>
                        <p><?= $service['description'] ?></p>
                        <p>
                            <a href="<?= base_url() ?>customers/booking/<?= $service['visitId'] ?>" class="btn btn-primary" role="button">See Packages</a>
                        </p>                     
                    </div>
                    <?php
                }
                ?>
            </div>
            <hr>
            <?php require_once("template/footer.php"); ?>
        </div>
        <?php require_once("template/files.php"); ?>
    </body>
</html>
