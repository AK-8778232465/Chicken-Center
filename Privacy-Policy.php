<?php require_once('header.php'); ?>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                            
foreach ($result as $row) {
   $PrivacyPolicy_title = $row['PrivacyPolicy_title'];
    $PrivacyPolicy_content = $row['PrivacyPolicy_content'];
    $PrivacyPolicy_banner = $row['PrivacyPolicy_banner'];
}
?>

<div class="page-banner" style="background-image: url(assets/uploads/<?php echo $PrivacyPolicy_banner; ?>);">
    <div class="inner">
        <h1><?php echo $PrivacyPolicy_title; ?></h1>
    </div>
</div>

<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12">
                
                <p>
                    <?php echo $PrivacyPolicy_content; ?>
                </p>

            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>