<!DOCTYPE html>
<html lang="en">
    <?php require_once("template/head.php"); ?>
    <body>
        <?php require_once("template/nav.php"); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Hot Offers!
                        <small>Book right now</small>
                    </h1>
                </div>
            </div>
            <div class="row">
                <?php
                if (!isset($services)) {
                    echo "<p>Not Found</p>";
                } else {
                    foreach ($services as $row) {
                        ?>
                        <div class="col-md-4 img-portfolio">
                            <a href="<?= base_url() ?>visitors/details/<?= $row['visitId'] ?>">
                                <img class="img-responsive animated flipInX" src="<?= base_url() ?>uploads/places/<?= $row['image'] ?>" alt="Picture">
                            </a>
                            <h3>
                                <a href="<?= base_url() ?>visitors/details/<?= $row['visitId'] ?>"><?= $row['destination'] ?></a>
                            </h3>
                            <p><?= substr(strip_tags($row['description']), 0, 200) . "..." ?></p>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <hr>
            <div class="row text-center">
                <div class="col-lg-12">
                    <span class="pagination"><?= $pages ?></span>
                </div>
            </div>
            <hr>
            <?php require_once("template/footer.php"); ?>
        </div>
        <?php require_once("template/files.php"); ?>
    </body>
</html>