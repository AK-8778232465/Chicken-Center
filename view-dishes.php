<?php require_once('header.php'); ?>
    <?php
        $statement = $pdo->prepare("SELECT * FROM tbl_top_category WHERE show_on_menu=1");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);   
        $i = 0; 
        foreach ($result as $row) {
            if($i == 0) {
                $veg_view_id = $row['tcat_id'];
                $veg_view_name = $row['tcat_name'];
                $i = 1;
            } else {
                $non_veg_view_id = $row['tcat_id'];
                $non_veg_view_name = $row['tcat_name'];
            }
        }
        echo $veg_view_id."\n";
        echo $non_veg_view_id
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-4 d-flex justify-content-center" style="height:300px;">
                <a href="product-category.php?id=<?php echo $veg_view_id; ?>&type=top-category">
                    <img src="assets/uploads/veg_banner.png" class="img-rounded" alt="Veg Dish"style="height:250px;border-top-left-radius: 20px;border-top-right-radius: 20px;" >
                </a>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4" style="height:300px;">
                <a href="product-category.php?id=<?php echo $non_veg_view_id; ?>&type=top-category">
                    <img src="assets/uploads/non_veg_banner.png" class="img-rounded" alt="Non Veg Dish" style="height:250px;border-top-left-radius: 20px;border-top-right-radius: 20px;" >
                </a>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>

<?php require_once('footer.php'); ?>