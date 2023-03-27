<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
   $returnPolicy_title = $row['returnPolicy_title'];
    $returnPolicy_content = $row['returnPolicy_content'];
    $returnPolicy_banner = $row['returnPolicy_banner'];
}
?>

<div class="page-banner" style="background-image: url(assets/uploads/<?php echo $returnPolicy_banner; ?>);">
    <div class="inner">
        <h1><?php echo $returnPolicy_title; ?></h1>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12">
                
                <p>
                    <?php echo $returnPolicy_content; ?>
                </p>

            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>