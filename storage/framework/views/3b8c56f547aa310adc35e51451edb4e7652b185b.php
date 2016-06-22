<!DOCTYPE html>
<html>
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="keywords" content="smarty" />
    <meta name="description" content="Smarty - A Smart Auery creation">
    <meta name="author" content="Smarty">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $__env->yieldContent('header'); ?>
</head>

<body <?php echo $__env->yieldContent('body_atributes'); ?>>
       
<!-- we will put the thedi to change the theme or color skin tool-box -->


<!-- we will put the thedi to change the theme or color -->

<!-- Start: Main -->
<div id="main">
   
<!-- navbar top here hihihi by oussama -->
    <?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- end navbar top here hihihi by oussama -->

<!-- side bar of admin template (menu)  -->
    <?php echo $__env->make('layouts.sidebarleft', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!--  end side bar of admin template (menu)  -->

    <?php echo $__env->yieldContent('content_wrapper'); ?>

</div>
<!-- End: Main -->

<?php echo $__env->yieldContent('script'); ?>

</body>

</html>
