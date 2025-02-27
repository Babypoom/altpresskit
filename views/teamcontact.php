<div class="twelve columns">
	<div id="credits" class="six columns alpha">
		<h2>L'équipe dirigeante</h2>
		<dl>
		<?php 
		foreach($data->credits as $credit) {
			if(isset($credit['website'])) {
				echo '<dt>', ViewHelper::link($credit['website'], $credit['person']), '</dt>';
			} else {
				echo '<dt>', $credit['person'], '</dt>';
			}
			echo '<dd>', $credit['role'], '</dd>';
		} ?>
		</dl>
	</div>

	<div id="contact" class="six columns omega">
		<h2>Contact</h2>
		<dl>
		<?php 
		foreach($developer->contacts as $contact) {
			echo '<dt>', $contact['name'], '</dt>';
			if(isset($contact['mail'])) {
				echo '<dd>', ViewHelper::email($contact['mail']), '</dd>';
			} else {
				echo '<dd>', ViewHelper::link($contact['link']), '</dd>';
			}
			
		} ?>
		</dl>
		<?php if ($data->phone != "") : ?>
		<dt>Tel :</dt>
		<dd><?php echo ViewHelper::callto($data->phone); ?></dd>
		<?php endif; ?>
	</div>
</div>