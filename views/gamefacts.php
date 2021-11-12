<div id="factsheet" class="four columns">
	<h2>Fiche</h2>
	<dl>
		<dt>Nom:</dt>
		<dd><?php echo $developer->title; ?></dd>
		<dd><?php echo $developer->basedIn; ?></dd>

		<?php if($data->isDeveloper) : ?>
			<dt>De de création :</dt>
		<?php else : ?>
			<dt>Mise à jour:</dt>
		<?php endif; ?>
		<dd><?php echo $data->releaseDate; ?></dd>

		<dt>Plateformes:</dt>
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

		<dt>Site:</dt>
		<dd><?php echo ViewHelper::link($data->website); ?></dd>
	</dl>

	<?php if($data->prices != null) : ?>
	<h5>Prix:</h5>
	
	<table class="prices">
		<?php foreach($data->prices as $key => $platform): ?>
			<?php echo $key != null ? '<caption>' . $key . '</caption>' : ''; ?>
			<?php foreach($platform as $price): ?>
				<tr>
					<td><?php echo $price['currency']; ?></td>
					<td><?php echo $price['value']; ?></td>
				</tr>
			<?php endforeach; ?>
		<?php endforeach; ?>
	</table>
	<?php endif; ?>
</div>