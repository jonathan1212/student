<?php foreach($pager->getResults() as $student):?>
	<?php echo $student->getSubjectName(); ?>

<?php endforeach; ?>


<div>
	<?php if ($pager->haveToPaginate()): ?>
			<?php include_partial('widget/pager', array('pager' => $pager, 'baseUrl' => url_for('subject/index'), 'moreParams' => '')); ?>
    <?php endif; ?>
</div>