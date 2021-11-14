<?php if (isset($data->additionals)): ?>
<div id="additionals" class="twelve columns">
	<h2>Autres liens</h2>
	<dl>
		<?php foreach($data->additionals as $additional): ?>
			<dt><?php echo $additional['title']; ?></dt>
			<dd><?php echo $additional['description'], ' ', ViewHelper::link($additional['link']); ?></dd>
		<?php endforeach; ?>
	</dl>
</div>

<hr class="twelve columns" />
<?php endif; ?>

<?php if(isset($data->quotes)): ?>
<div id="articles" class="twelve columns">
	<h2>Avis clients</h2>
	<ul>
	<?php foreach($data->quotes as $quote): ?>
		<li>
			<blockquote cite="<?php echo $quote['link']; ?>">
				<span><?php echo $quote['description']; ?></span>
				<footer><?php echo $quote['name']; ?>, <a href="<?php echo $quote['link']; ?>"><?php echo $quote['website']; ?></a></footer>
			</blockquote>
		</li>
	<?php endforeach; ?>
	</ul>
	<ul>
		<li><a style="font-size:large" href="https://www.reviews.io/company-reviews/store/baby-poom">Voir tous les avis</a></li>
	</ul>
</div>

<hr class="twelve columns" />

<?php endif; ?>
