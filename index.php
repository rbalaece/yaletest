<main id="main" role="main">
<div class="container">
	<div class="row">
		<?php if($page['sidebar_right'] &&  $page['sidebar_left']) : ?>

		<div class="col-md-3 col-sm-3" id="sidebar">
			<?php print render($page['sidebar_left']); ?>
		</div>
		<div class="col-md-6 col-sm-6" id="content">
			<?php print render($page['content']); ?>
		</div>
		<div class="col-md-3 col-sm-3 aside">
			<?php print render($page['sidebar_right']); ?>
		</div>

		<?php else : ?>

		<?php if($page['sidebar_right']) : ?>
		<div class="col-md-9 col-sm-8" id="content">
			<?php print render($page['content']); ?>
		</div>
		<div class="col-md-3 col-sm-4" id="sidebar">
			<?php print render($page['sidebar_right']); ?>
		</div>

		<?php endif; ?>

		<?php if($page['sidebar_left']) : ?>
		<div class="col-md-9 col-sm-8 pull-right" id="content">
			<?php print render($page['content']); ?>
		</div>
		<div class="col-md-3 col-sm-4" id="sidebar">
			<?php print render($page['sidebar_right']); ?>
		</div>

		<?php endif; ?>
		<?php endif; ?>
<span>this is new fine loook</span>
	</div>
</div>
</main>
