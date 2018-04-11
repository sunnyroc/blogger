<?php 
/*------------------------------------------------------------------------
# Custom Tag Cloud
# ------------------------------------------------------------------------
# The Krotek
# Copyright (C) 2011-2017 thekrotek.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website: http://thekrotek.com
# Support: support@thekrotek.com
-------------------------------------------------------------------------*/

$fields = array(
	'title' => array('type' => 'text'),
	'mode' => array('type' => 'select', 'default' => 'widget', 'data' => array(
		'widget' => __('mode_widget', $this->label),
		'shortcode' => __('mode_shortcode', $this->label),
		'both' => __('mode_both', $this->label))),
	'taxonomy' => array('type' => 'select', 'default' => 'post_tag', 'data' => array(
		'post_tag' => __('taxonomy_post', $this->label),
		'category' => __('taxonomy_category', $this->label),
		'link_category' => __('taxonomy_link', $this->label))),
	'number' => array('type' => 'number', 'default' => '45'),
	'separator' => array('type' => 'text', 'default' => ' '));

?>
		
<div class="<?php echo $this->label; ?> kui">
	<div class="option-header">
		<span><?php echo __('shortcode_header', $this->label); ?>: <?php echo (is_numeric($this->number) ? $this->number : __('message_save', $this->label)); ?></span>
	</div>
	<?php if (file_exists($this->basedir.'premium/settings.php')) { ?>
		<?php require($this->basedir.'premium/settings.php'); ?>
	<?php } else { ?>
		<p>More settings available in <a href="http://thekrotek.com/wordpress-extensions/tag-cloud" title="Go Premium!">Premium version</a> only.</p>
	<?php } ?>
	<?php require($this->basedir.'helpers/fields.php'); ?>
	<div class="footnote"><?php echo sprintf(__('footnote', $this->label), date("Y", time())); ?></div>
</div>