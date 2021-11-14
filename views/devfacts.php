<div id="factsheet" class="four columns">
	<h2>Fiche</h2>
	<dl>
		<dt>Nom :</dt>
		<dd><?php echo $data->title; ?></dd>
		<dd>Lieu: <?php echo $data->basedIn; ?></dd>

		<dt>Date :</dt>
		<dd><?php echo $data->foundingDate; ?></dd>

		<dt>Website :</dt>
		<dd><?php echo ViewHelper::link($data->website); ?></dd>

		<dt>Presse / Business Contact :</dt>
		<dd><?php echo ViewHelper::email($data->pressContact); ?></dd>

		<dt>Social :</dt>
		<?php foreach($data->socials as $social): ?>
			<dd><?php echo ViewHelper::link($social['link'], $social['name']); ?></dd>
		<?php endforeach; ?>

		<dt>Plateformes :</dt>
		<?php
		if (isset($data->platforms)) {
			foreach($data->platforms as $platform) {
				if(isset($platform['link'])) {
					echo '<dd>', ViewHelper::link($platform['link'], $platform['name']), '</dd>';
				} else {
					echo '<dd>', $platform['name'], '</dd>';
				}
			}
		}
		?>
		
	</dl>
</div>