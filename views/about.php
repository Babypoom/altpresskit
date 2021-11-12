<div id="about" class="twelve columns">
	<h2>A propos <?php echo $data->title; ?></h2>
	<p><?php echo $data->description; ?></p>
	<h3>Plus d'informations</h3>
	<p>Plus d'informations <?php echo $data->title; ?>, notre logo &amp; et médias importants <?php echo ViewHelper::link('/' . BASE_PATH, 'here') ?>.</p>
</div>

<hr class="twelve columns" />