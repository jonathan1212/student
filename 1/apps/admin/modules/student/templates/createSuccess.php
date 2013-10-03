<br>

<?php if($sf_user->hasFlash('success')): ?>
    <div class="success"><?php echo $sf_user->getFlash('success'); ?></div>
<?php endif; ?>
<?php if($sf_user->hasFlash('error')): ?>
    <div class="error"><?php echo $sf_user->getFlash('error'); ?></div>
<?php endif; ?>


<?php include_partial('student/form',array('form' => $form)); ?>