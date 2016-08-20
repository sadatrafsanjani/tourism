<!DOCTYPE html>
<html lang="en">
    <?php require_once("template/head.php"); ?>
    <body>
        <?php require_once("template/nav.php"); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Transaction
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Transaction Status</h2>
                </div>
                <div class="col-md-6">
                    <p><?php if(isset($transactionId)){
                        echo sha1($transactionId);
                    }
                    else{
                        echo "Error! Please try again";
                    }?></p>
                </div>
            </div>
            <hr>
            <div class="well">
                <div class="row">
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                    </div>
                </div>
            </div>
            <hr>
            <?php require_once("template/footer.php"); ?>
        </div>
        <?php require_once("template/files.php"); ?>
    </body>
</html>
