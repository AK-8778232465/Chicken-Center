<?php require_once('header.php'); ?>

<?php

if(isset($_POST['form_about'])) {
    
    $valid = 1;

    if(empty($_POST['about_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    if(empty($_POST['about_content'])) {
        $valid = 0;
        $error_message .= 'Content can not be empty<br>';
    }

    $path = $_FILES['about_banner']['name'];
    $path_tmp = $_FILES['about_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $about_banner = $row['about_banner'];
                unlink('../assets/uploads/'.$about_banner);
            }

            // updating the data
            $final_name = 'about-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET about_title=?,about_content=?,about_banner=?,about_meta_title=?,about_meta_keyword=?,about_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['about_title'],$_POST['about_content'],$final_name,$_POST['about_meta_title'],$_POST['about_meta_keyword'],$_POST['about_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET about_title=?,about_content=?,about_meta_title=?,about_meta_keyword=?,about_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['about_title'],$_POST['about_content'],$_POST['about_meta_title'],$_POST['about_meta_keyword'],$_POST['about_meta_description']));
        }

        $success_message = 'About Page Information is updated successfully.';
        
    }
    
}

if(isset($_POST['form_PrivacyPolicy'])) {
    
    $valid = 1;

    if(empty($_POST['PrivacyPolicy_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    if(empty($_POST['PrivacyPolicy_content'])) {
        $valid = 0;
        $error_message .= 'Content can not be empty<br>';
    }

    $path = $_FILES['PrivacyPolicy_banner']['name'];
    $path_tmp = $_FILES['PrivacyPolicy_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $PrivacyPolicy_banner = $row['PrivacyPolicy_banner'];
                unlink('../assets/uploads/'.$PrivacyPolicy_banner);
            }

            // updating the data
            $final_name = 'PrivacyPolicy-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET PrivacyPolicy_title=?,PrivacyPolicy_content=?,PrivacyPolicy_banner=?,PrivacyPolicy_meta_title=?,PrivacyPolicy_meta_keyword=?,PrivacyPolicy_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['PrivacyPolicy_title'],$_POST['PrivacyPolicy_content'],$final_name,$_POST['PrivacyPolicy_meta_title'],$_POST['PrivacyPolicy_meta_keyword'],$_POST['PrivacyPolicy_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET PrivacyPolicy_title=?,PrivacyPolicy_content=?,PrivacyPolicy_meta_title=?,PrivacyPolicy_meta_keyword=?,PrivacyPolicy_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['PrivacyPolicy_title'],$_POST['PrivacyPolicy_content'],$_POST['PrivacyPolicy_meta_title'],$_POST['PrivacyPolicy_meta_keyword'],$_POST['PrivacyPolicy_meta_description']));
        }

        $success_message = 'PrivacyPolicy Page Information is updated successfully.';
        
    }
    
}

if(isset($_POST['form_returnPolicy'])) {
    
    $valid = 1;

    if(empty($_POST['returnPolicy_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    if(empty($_POST['returnPolicy_content'])) {
        $valid = 0;
        $error_message .= 'Content can not be empty<br>';
    }

    $path = $_FILES['returnPolicy_banner']['name'];
    $path_tmp = $_FILES['returnPolicy_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $returnPolicy_banner = $row['returnPolicy_banner'];
                unlink('../assets/uploads/'.$returnPolicy_banner);
            }

            // updating the data
            $final_name = 'returnPolicy-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET returnPolicy_title=?,returnPolicy_content=?,returnPolicy_banner=?,returnPolicy_meta_title=?,returnPolicy_meta_keyword=?,returnPolicy_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['returnPolicy_title'],$_POST['returnPolicy_content'],$final_name,$_POST['returnPolicy_meta_title'],$_POST['returnPolicy_meta_keyword'],$_POST['returnPolicy_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET returnPolicy_title=?,returnPolicy_content=?,returnPolicy_meta_title=?,returnPolicy_meta_keyword=?,returnPolicy_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['returnPolicy_title'],$_POST['returnPolicy_content'],$_POST['returnPolicy_meta_title'],$_POST['returnPolicy_meta_keyword'],$_POST['returnPolicy_meta_description']));
        }

        $success_message = 'returnPolicy Page Information is updated successfully.';
        
    }
    
}

if(isset($_POST['form_shipingPolicy'])) {
    
    $valid = 1;

    if(empty($_POST['shipingPolicy_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    if(empty($_POST['shipingPolicy_content'])) {
        $valid = 0;
        $error_message .= 'Content can not be empty<br>';
    }

    $path = $_FILES['shipingPolicy_banner']['name'];
    $path_tmp = $_FILES['shipingPolicy_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $shipingPolicy_banner = $row['shipingPolicy_banner'];
                unlink('../assets/uploads/'.$shipingPolicy_banner);
            }

            // updating the data
            $final_name = 'shipingPolicy-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET shipingPolicy_title=?,shipingPolicy_content=?,shipingPolicy_banner=?,shipingPolicy_meta_title=?,shipingPolicy_meta_keyword=?,shipingPolicy_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['shipingPolicy_title'],$_POST['shipingPolicy_content'],$final_name,$_POST['shipingPolicy_meta_title'],$_POST['shipingPolicy_meta_keyword'],$_POST['shipingPolicy_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET shipingPolicy_title=?,shipingPolicy_content=?,shipingPolicy_meta_title=?,shipingPolicy_meta_keyword=?,shipingPolicy_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['shipingPolicy_title'],$_POST['shipingPolicy_content'],$_POST['shipingPolicy_meta_title'],$_POST['shipingPolicy_meta_keyword'],$_POST['shipingPolicy_meta_description']));
        }

        $success_message = 'shipingPolicy Page Information is updated successfully.';
        
    }
    
}

if(isset($_POST['form_termsAndCondition'])) {
    
    $valid = 1;

    if(empty($_POST['termsAndCondition_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    if(empty($_POST['termsAndCondition_content'])) {
        $valid = 0;
        $error_message .= 'Content can not be empty<br>';
    }

    $path = $_FILES['termsAndCondition_banner']['name'];
    $path_tmp = $_FILES['termsAndCondition_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $termsAndCondition_banner = $row['termsAndCondition_banner'];
                unlink('../assets/uploads/'.$termsAndCondition_banner);
            }

            // updating the data
            $final_name = 'termsAndCondition-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET termsAndCondition_title=?,termsAndCondition_content=?,termsAndCondition_banner=?,termsAndCondition_meta_title=?,termsAndCondition_meta_keyword=?,termsAndCondition_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['termsAndCondition_title'],$_POST['termsAndCondition_content'],$final_name,$_POST['termsAndCondition_meta_title'],$_POST['termsAndCondition_meta_keyword'],$_POST['termsAndCondition_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET termsAndCondition_title=?,termsAndCondition_content=?,termsAndCondition_meta_title=?,termsAndCondition_meta_keyword=?,termsAndCondition_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['termsAndCondition_title'],$_POST['termsAndCondition_content'],$_POST['termsAndCondition_meta_title'],$_POST['termsAndCondition_meta_keyword'],$_POST['termsAndCondition_meta_description']));
        }

        $success_message = 'termsAndCondition Page Information is updated successfully.';
        
    }
    
}



if(isset($_POST['form_faq'])) {
    
    $valid = 1;

    if(empty($_POST['faq_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    $path = $_FILES['faq_banner']['name'];
    $path_tmp = $_FILES['faq_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $faq_banner = $row['faq_banner'];
                unlink('../assets/uploads/'.$faq_banner);
            }

            // updating the data
            $final_name = 'faq-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET faq_title=?,faq_banner=?,faq_meta_title=?,faq_meta_keyword=?,faq_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['faq_title'],$final_name,$_POST['faq_meta_title'],$_POST['faq_meta_keyword'],$_POST['faq_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET faq_title=?,faq_meta_title=?,faq_meta_keyword=?,faq_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['faq_title'],$_POST['faq_meta_title'],$_POST['faq_meta_keyword'],$_POST['faq_meta_description']));
        }

        $success_message = 'FAQ Page Information is updated successfully.';
        
    }
    
}



if(isset($_POST['form_contact'])) {
    
    $valid = 1;

    if(empty($_POST['contact_title'])) {
        $valid = 0;
        $error_message .= 'Title can not be empty<br>';
    }

    $path = $_FILES['contact_banner']['name'];
    $path_tmp = $_FILES['contact_banner']['tmp_name'];

    if($path != '') {
        $ext = pathinfo( $path, PATHINFO_EXTENSION );
        $file_name = basename( $path, '.' . $ext );
        if( $ext!='jpg' && $ext!='png' && $ext!='jpeg' && $ext!='gif' ) {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    }

    if($valid == 1) {

        if($path != '') {
            // removing the existing photo
            $statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
            foreach ($result as $row) {
                $contact_banner = $row['contact_banner'];
                unlink('../assets/uploads/'.$contact_banner);
            }

            // updating the data
            $final_name = 'contact-banner'.'.'.$ext;
            move_uploaded_file( $path_tmp, '../assets/uploads/'.$final_name );

            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET contact_title=?,contact_banner=?,contact_meta_title=?,contact_meta_keyword=?,contact_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['contact_title'],$final_name,$_POST['contact_meta_title'],$_POST['contact_meta_keyword'],$_POST['contact_meta_description']));
        } else {
            // updating the database
            $statement = $pdo->prepare("UPDATE tbl_page SET contact_title=?,contact_meta_title=?,contact_meta_keyword=?,contact_meta_description=? WHERE id=1");
            $statement->execute(array($_POST['contact_title'],$_POST['contact_meta_title'],$_POST['contact_meta_keyword'],$_POST['contact_meta_description']));
        }

        $success_message = 'Contact Page Information is updated successfully.';
        
    }
    
}


?>

<section class="content-header">
    <div class="content-header-left">
        <h1>Page Settings</h1>
    </div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);                           
foreach ($result as $row) {
    $about_title = $row['about_title'];
    $about_content = $row['about_content'];
    $about_banner = $row['about_banner'];
    $about_meta_title = $row['about_meta_title'];
    $about_meta_keyword = $row['about_meta_keyword'];
    $about_meta_description = $row['about_meta_description'];
    $PrivacyPolicy_title = $row['PrivacyPolicy_title'];
    $PrivacyPolicy_content = $row['PrivacyPolicy_content'];
    $PrivacyPolicy_banner = $row['PrivacyPolicy_banner'];
    $PrivacyPolicy_meta_title = $row['PrivacyPolicy_meta_title'];
    $PrivacyPolicy_meta_keyword = $row['PrivacyPolicy_meta_keyword'];
    $PrivacyPolicy_meta_description = $row['PrivacyPolicy_meta_description'];
    $returnPolicy_title = $row['returnPolicy_title'];
    $returnPolicy_content = $row['returnPolicy_content'];
    $returnPolicy_banner = $row['returnPolicy_banner'];
    $returnPolicy_meta_title = $row['returnPolicy_meta_title'];
    $returnPolicy_meta_keyword = $row['returnPolicy_meta_keyword'];
    $returnPolicy_meta_description = $row['returnPolicy_meta_description'];
    $shipingPolicy_title = $row['shipingPolicy_title'];
    $shipingPolicy_content = $row['shipingPolicy_content'];
    $shipingPolicy_banner = $row['shipingPolicy_banner'];
    $shipingPolicy_meta_title = $row['shipingPolicy_meta_title'];
    $shipingPolicy_meta_keyword = $row['shipingPolicy_meta_keyword'];
    $shipingPolicy_meta_description = $row['shipingPolicy_meta_description'];
    $termsAndCondition_title = $row['termsAndCondition_title'];
    $termsAndCondition_content = $row['termsAndCondition_content'];
    $termsAndCondition_banner = $row['termsAndCondition_banner'];
    $termsAndCondition_meta_title = $row['termsAndCondition_meta_title'];
    $termsAndCondition_meta_keyword = $row['termsAndCondition_meta_keyword'];
    $termsAndCondition_meta_description = $row['termsAndCondition_meta_description'];
    $faq_title = $row['faq_title'];
    $faq_banner = $row['faq_banner'];
    $faq_meta_title = $row['faq_meta_title'];
    $faq_meta_keyword = $row['faq_meta_keyword'];
    $faq_meta_description = $row['faq_meta_description'];
    $contact_title = $row['contact_title'];
    $contact_banner = $row['contact_banner'];
    $contact_meta_title = $row['contact_meta_title'];
    $contact_meta_keyword = $row['contact_meta_keyword'];
    $contact_meta_description = $row['contact_meta_description'];

}
?>


<section class="content" style="min-height:auto;margin-bottom: -30px;">
    <div class="row">
        <div class="col-md-12">
            <?php if($error_message): ?>
            <div class="callout callout-danger">
            
            <p>
            <?php echo $error_message; ?>
            </p>
            </div>
            <?php endif; ?>

            <?php if($success_message): ?>
            <div class="callout callout-success">
            
            <p><?php echo $success_message; ?></p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="content">

    <div class="row">
        <div class="col-md-12">
                            
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">About Us</a></li>
                        <li><a href="#tab_2" data-toggle="tab">FAQ</a></li>
                        <li><a href="#tab_3" data-toggle="tab">Contact</a></li>
                        <li><a href="#tab_4" data-toggle="tab">Privacy Policy</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Return Policy</a></li>
                        <li><a href="#tab_6" data-toggle="tab">Shiping Policy</a></li>
                        <li><a href="#tab_7" data-toggle="tab">Terms and Conditions</a></li>


                    </ul>

                    <!-- About us Page Content -->

                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="about_title" value="<?php echo $about_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Content * </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="about_content" id="editor1"><?php echo $about_content; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $about_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="about_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="about_meta_title" value="<?php echo $about_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="about_meta_keyword" style="height:100px;"><?php echo $about_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="about_meta_description" style="height:100px;"><?php echo $about_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_about">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

        <!-- FAQ Page Content -->

                        <div class="tab-pane" id="tab_2">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="faq_title" value="<?php echo $faq_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $faq_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="faq_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="faq_meta_title" value="<?php echo $faq_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="faq_meta_keyword" style="height:100px;"><?php echo $faq_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="faq_meta_description" style="height:100px;"><?php echo $faq_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_faq">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <!-- End of FAQ Page Content -->

                        <div class="tab-pane" id="tab_3">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="contact_title" value="<?php echo $contact_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $contact_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="contact_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="contact_meta_title" value="<?php echo $contact_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="contact_meta_keyword" style="height:100px;"><?php echo $contact_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="contact_meta_description" style="height:100px;"><?php echo $contact_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_contact">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        
                        <div class="tab-pane" id="tab_4">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="PrivacyPolicy_title" value="<?php echo $PrivacyPolicy_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Content * </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="PrivacyPolicy_content" id="editor1"><?php echo $PrivacyPolicy_content; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $PrivacyPolicy_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="PrivacyPolicy_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="PrivacyPolicy_meta_title" value="<?php echo $PrivacyPolicy_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="PrivacyPolicy_meta_keyword" style="height:100px;"><?php echo $PrivacyPolicy_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="PrivacyPolicy_meta_description" style="height:100px;"><?php echo $PrivacyPolicy_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_PrivacyPolicy">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <div class="tab-pane" id="tab_5">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="returnPolicy_title" value="<?php echo $returnPolicy_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Content * </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="returnPolicy_content" id="editor1"><?php echo $returnPolicy_content; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $returnPolicy_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="returnPolicy_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="returnPolicy_meta_title" value="<?php echo $returnPolicy_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="returnPolicy_meta_keyword" style="height:100px;"><?php echo $returnPolicy_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="returnPolicy_meta_description" style="height:100px;"><?php echo $returnPolicy_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_returnPolicy">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <div class="tab-pane" id="tab_6">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="shipingPolicy_title" value="<?php echo $shipingPolicy_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Content * </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="shipingPolicy_content" id="editor1"><?php echo $shipingPolicy_content; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $shipingPolicy_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="shipingPolicy_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="shipingPolicy_meta_title" value="<?php echo $shipingPolicy_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="shipingPolicy_meta_keyword" style="height:100px;"><?php echo $shipingPolicy_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="shipingPolicy_meta_description" style="height:100px;"><?php echo $shipingPolicy_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_shipingPolicy">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <div class="tab-pane" id="tab_7">
                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="box box-info">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Title * </label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" name="termsAndCondition_title" value="<?php echo $termsAndCondition_title; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Page Content * </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="termsAndCondition_content" id="editor1"><?php echo $termsAndCondition_content; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Existing Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <img src="../assets/uploads/<?php echo $termsAndCondition_banner; ?>" class="existing-photo" style="height:80px;">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Banner Photo</label>
                                        <div class="col-sm-6" style="padding-top:6px;">
                                            <input type="file" name="termsAndCondition_banner">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Title</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="termsAndCondition_meta_title" value="<?php echo $termsAndCondition_meta_title; ?>">
                                        </div>
                                    </div>             
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Keyword </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="termsAndCondition_meta_keyword" style="height:100px;"><?php echo $termsAndCondition_meta_keyword; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Meta Description </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="termsAndCondition_meta_description" style="height:100px;"><?php echo $termsAndCondition_meta_description; ?></textarea>
                                        </div>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <button type="submit" class="btn btn-success pull-left" name="form_termsAndCondition">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>



                

            </form>
        </div>
    </div>

</section>

<?php require_once('footer.php'); ?>