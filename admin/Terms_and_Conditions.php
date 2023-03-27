<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
   $termsAndCondition_title = $row['termsAndCondition_title'];
    $termsAndCondition_content = $row['termsAndCondition_content'];
    $termsAndCondition_banner = $row['termsAndCondition_banner'];
}
?>

<div class="page-banner" style="background-image: url(assets/uploads/<?php echo $termsAndCondition_banner; ?>);">
    <div class="inner">
        <h1><?php echo $termsAndCondition_title; ?></h1>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12">
                
                <p>
                    <?php echo $termsAndCondition_content; ?>
                </p>

            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>