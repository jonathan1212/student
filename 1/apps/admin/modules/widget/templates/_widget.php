<?php if( isset($pager) && $pager instanceof sfPager ):?>

	<?php if ($pager->getPage() == 1) : ?>
		<span class="disabled first">First</span>
	<?php else : ?>
		<a href="<?php echo url_for($baseUrl.'?page='.$pager->getFirstPage().$moreParams) ?>">
			<span class="first">First</span>
		</a>
	<?php endif; ?>

	<?php if ($pager->getPage() > 1) : ?>
		<a href="<?php echo url_for($baseUrl.'?page='.$pager->getPreviousPage().$moreParams) ?>">
			<span class="previous">Prev</span>
		</a>
	<?php else : ?>
		<span class="disabled previous">Prev</span>
	<?php endif; ?>

	<?php foreach ($pager->getLinks() as $page) : ?>
		<?php if ($page == $pager->getPage()) : ?>
			<strong class="pageLinkSelected"><?php echo $page ?></strong>
		<?php else : ?>
			<?php echo link_to($page, url_for($baseUrl.'?page='.$page.$moreParams), array('class' => 'pageLink')) ?>
		<?php endif; ?>
	<?php endforeach; ?>

	<?php if ($pager->getPage() < $pager->getLastPage()) : ?>
		<a href="<?php echo url_for($baseUrl.'?page='.$pager->getNextPage().$moreParams) ?>" title="Next page">
			<span class="next">Next</span>
		</a>
	<?php else : ?>
		<span class="next">Next</span>
	<?php endif; ?>

	<?php if ($pager->getPage() != $pager->getLastPage()) : ?>
		<a href="<?php echo url_for($baseUrl.'?page='.$pager->getLastPage().$moreParams) ?>" title="Proceed to the last page">
			<span class="last">Last</span>
		</a>
	<?php else : ?>
		<span class="last">Last</span>
	<?php endif; ?>
		   
<?php endif; ?>