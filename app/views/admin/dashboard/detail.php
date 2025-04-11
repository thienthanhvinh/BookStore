<?php

$config = include __DIR__ . ('/../../../config/config.php');
$base_url = $config['app']['base_url'];

?>

<!-- layout header -->
<?php include __DIR__ . '/../../shared/admin/admin_header.php' ?>
<title><?php echo $title ?></title>



<div class="flex">
    
    <!-- layout sidebar -->
    <?php include __DIR__ . '/../../shared/admin/admin_sidebar.php' ?>

    <!-- layout page -->
    <div class="bg-gray-100 basis-[82%] px-9 py-10">
    
    </div>

</div>
