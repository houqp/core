	<?php for($i=0; $i<count($_["breadcrumb"]); $i++):
		$crumb = $_["breadcrumb"][$i];
		if (!isset($crumb["route"])) {
			$dir = str_replace('+', '%20', urlencode($crumb["dir"]));
			$dir = str_replace('%2F', '/', $dir);
			$crumb["route"] = $_['baseURL'].$dir;
		} ?>
		<div class="crumb <?php if($i == count($_["breadcrumb"])-1) echo 'last';?> svg" 
			 data-dir='<?php echo urlencode($crumb["dir"]);?>'
			 style='background-image:url("<?php echo OCP\image_path('core', 'breadcrumb.png');?>")'>
		<a href="<?php echo$crumb["route"]; ?>"><?php echo OCP\Util::sanitizeHTML($crumb["name"]); ?></a>
		</div>
	<?php endfor;