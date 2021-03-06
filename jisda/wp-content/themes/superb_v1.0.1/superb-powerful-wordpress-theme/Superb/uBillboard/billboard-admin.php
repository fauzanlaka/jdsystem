<?php

global $uds_billboard_attributes;

if(!empty($_GET['nonce']) && !wp_verify_nonce($_GET['nonce'], 'uds-billboard-delete')){
	die('Security check failed');
}

$billboards = maybe_unserialize(get_option(UDS_BILLBOARD_OPTION));

if(!empty($_GET['uds-billboard-delete'])) {
	unset($billboards[$_GET['uds-billboard-delete']]);
	update_option(UDS_BILLBOARD_OPTION, serialize($billboards));
}

// safety check
if(! is_array($billboards)) {
	$billboards = array();
}

//echo "<pre>";
//var_dump($billboards);

?>
<div class="wrap">
	<h2><?php _e('Add/Edit uBillboards', 'uds-textdomain') ?></h2>
	<?php if(!uds_billboard_cache_is_writable()): ?>
		<div class="updated uds-warn"><strong><?php _e('Warning!') ?></strong> <?php printf(__('Directory %s cache is not writable!', 'uds-textdomain'), UDS_BILLBOARD_PATH) ?></div>
	<?php endif; ?>
	<?php if(!empty($billboards)): ?>
		<table class="uds-billboard-admin-table">
			<tr>
				<th><?php _e('ID', 'uds-textdomain') ?></th>
				<th><?php _e('Billboard name', 'uds-textdomain') ?></th>
				<th><?php _e('Edit', 'uds-textdomain') ?></th>
				<th><?php _e('Delete', 'uds-textdomain') ?></th>
			</tr>
			<?php $n = 1; foreach($billboards as $key => $billboard): ?>
			<tr>
				<td class="id"><?php echo $n ?></td>
				<td class="uds-billboard-name"><?php echo $key ?> (<?php echo count($billboard['slides']); echo count($billboard['slides']) == 1 ? ' slide' : ' slides' ?>)</td>
				<td class="edit">
					<a href="admin.php?page=uds_billboard_add&uds-billboard-edit=<?php echo $key ?>" class="billboard-edit" title="Edit Item"><?php _e('Edit', 'uds-textdomain') ?></a>
				</td>
				<td class="delete">
					<a href="admin.php?page=uds_billboard_admin&uds-billboard-delete=<?php echo $key ?>&nonce=<?php echo wp_create_nonce('uds-billboard-delete')?>" class="billboard-delete" title="Delete Item"><?php _e('Delete', 'uds-textdomain') ?></a>
				</td>
			</tr>
			<?php $n++; endforeach; ?>
		</table>
	<?php else: ?>
		<p><?php _e('There are no billboards yet. You can create a billboard', 'uds-textdomain') ?> <a href="admin.php?page=uds_billboard_add"><?php _e('here', 'uds-textdomain') ?></a>.</p>
	<?php endif; ?>
</div>