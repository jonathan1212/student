<?php foreach($pager->getResults() as $student):?>


<?php endforeach; ?>



<div>
	<?php if ($pager->haveToPaginate()): ?>
			<?php include_partial('widget/pager', array('pager' => $pager, 'baseUrl' => url_for('student/index'), 'moreParams' => '')); ?>
    <?php endif; ?>
</div>