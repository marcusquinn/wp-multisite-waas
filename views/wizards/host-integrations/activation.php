<?php
/**
 * Host integrations activation view.
 *
 * @since 2.0.0
 */
?>
<h1>
	<?php printf(__('Activate %s Integration', 'wp-multisite-waas'), $integration->get_title()); ?>
</h1>

<p class="wu-text-lg wu-text-gray-600 wu-my-4">
	<?php echo $integration->get_description(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</p>

<div class="wu-bg-white wu-p-4 wu--mx-6">

	<div class="wu-flex wu-justify-center">

	<div class="wu-flex wu-content-center">
		<img style="width: 150px;" class="wu-self-center" src="<?php echo esc_url(wu_get_network_logo()); ?>">
	</div>

	<div class="wu-text-2xl wu-self-center wu-m-8">&rarr;</div>

	<div class="wu-flex wu-content-center">
		<img style="width: 150px;" class="wu-self-center" src="<?php echo esc_url($integration->get_logo()); ?>">
	</div>

	</div>

	<div>

	<span class="wu-text-sm wu-text-gray-800 wu-inline-block wu-py-4">
		<?php esc_html_e('This integration will:', 'wp-multisite-waas'); ?>
	</span>

	<ul class="wu--mx-5 wu-my-0 wu-border-t wu-border-solid wu-border-l-0 wu-border-r-0 wu-border-b-0 wu-border-gray-300">

		<?php foreach ($will as $line) : ?>

		<li class="wu-flex wu-content-center wu-py-2 wu-px-4 wu-bg-gray-100 wu-border-t-0 wu-border-solid wu-border-l-0 wu-border-r-0 wu-border-b wu-border-gray-300 wu-m-0">
			<span class="dashicons dashicons-yes-alt wu-text-green-400 wu-self-center wu-mr-2"></span>
			<span><?php echo esc_html($line); ?></span>
		</li>

		<?php endforeach; ?>

	</ul>
	</div>

	<?php if ( ! empty($will_not)) : ?>

	<div>

		<span class="wu-text-sm wu-text-gray-800 wu-inline-block wu-py-4">
		<?php echo wp_kses(__('This integration will <strong>not</strong>:', 'wp-multisite-waas'), ['strong' => []]); ?>
		</span>

		<ul class="wu--mx-5 wu-my-0 wu-border-t wu-border-solid wu-border-l-0 wu-border-r-0 wu-border-b-0 wu-border-gray-300">

		<?php foreach ($will_not as $line) : ?>

			<li class="wu-flex wu-content-center wu-py-2 wu-px-4 wu-bg-gray-100 wu-border-t-0 wu-border-solid wu-border-l-0 wu-border-r-0 wu-border-b wu-border-gray-300 wu-m-0">
			<span class="dashicons dashicons-dismiss wu-text-red-400 wu-self-center wu-mr-2"></span>
					<span><?php echo esc_html($line); ?></span>
			</li>

		<?php endforeach; ?>

		</ul>

	</div>

	<?php endif; ?>

</div>

<!-- Submit Box -->
<div class="wu-flex wu-justify-between wu-bg-gray-100 wu--m-in wu-mt-4 wu-p-4 wu-overflow-hidden wu-border-t wu-border-solid wu-border-l-0 wu-border-r-0 wu-border-b-0 wu-border-gray-300">

	<a href="<?php echo esc_url(wu_network_admin_url('wp-ultimo-settings&tab=integrations')); ?>" class="wu-self-center button button-large wu-float-left"><?php esc_html_e('&larr; Cancel', 'wp-multisite-waas'); ?></a>

	<span class="wu-self-center wu-content-center wu-flex">

	<?php if ($integration->is_enabled()) : ?>

		<span class="wu-self-center wu-text-green-800 wu-mr-4">
		<?php esc_html_e('Integration already activated.', 'wp-multisite-waas'); ?>
		</span>

	<?php endif; ?>

	<button name="submit" value="1" class="button button-primary button-large">
		<?php echo esc_html($integration->is_enabled() ? __('Deactivate', 'wp-multisite-waas') : __('Activate', 'wp-multisite-waas')); ?>
	</button>

	&nbsp;

	<?php if ($integration->is_enabled()) : ?>
		<a href="<?php echo esc_attr($page->get_next_section_link()); ?>" class="button button-large">
		<?php esc_html_e('Continue', 'wp-multisite-waas'); ?>
		</a>
	<?php endif; ?>

	</span>

</div>
<!-- End Submit Box -->

