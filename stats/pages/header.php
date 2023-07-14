<?php if ( !defined( '_INF' ) ) exit; ?>
<!DOCTYPE html>
<html>
	<head>
		<?php
		if ( isset( $GLOBALS['inf_header'] ) )
		{
			echo $GLOBALS['inf_header'];
		}
		?>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script type="text/javascript" src="js/main.js"></script>
		<link rel="icon" href="..//favico.png" type="image/x-icon">
		<title>
			<?php
			echo isset( $GLOBALS['inf_title'] ) ? $GLOBALS['inf_title'] : 'Surf Timer Stats - css.noil.lt';
			?>
		</title>
	</head>