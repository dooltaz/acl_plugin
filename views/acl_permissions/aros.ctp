<div class="acl_permission_box">
  <div class="acl_permission_title"><?php print $aro ?> Grants</div>
  <?php $i=0; foreach ($nodes as $k => $n) { $i++; ?>
    <div class="acl_permission_item <?php print ($i%2==0) ? 'acl_row_even' : 'acl_row_odd' ?>">
      <?php print $html->image('/acl/img/tango/16x16/actions/edit-undo.png', array('class' => 'acl_permission_link', 'onClick' => "acl_permission_revoke({$n['AclAroAco']['id']})")) ?>
      <?php 
			$permissions = '';
			
			if($n['AclAroAco']['_create']) $permissions .= "C";
			if($n['AclAroAco']['_read']) $permissions .= "R";
			if($n['AclAroAco']['_update']) $permissions .= "U";
			if($n['AclAroAco']['_delete']) $permissions .= "D";
			print $k . " (" . $permissions . ")";
	  ?>
    </div>
<?php } ?>
</div>
</div>
