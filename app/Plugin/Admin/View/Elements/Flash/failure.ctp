<?php
/**
 * Created by PhpStorm.
 * User: Manish
 * Date: 11/07/2017
 * Time: 7:57 AM
 */
?>
<div id="flash-<?php echo h($key) ?>" class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span>
        <span class="sr-only"><?php echo __("Close");?></span></button>
    <?php echo  h($message); ?>
</div>