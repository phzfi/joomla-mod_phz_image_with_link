<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_latest
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined ( '_JEXEC' ) or die ();

$document = JFactory::getDocument();
$modulePath = JURI::base() . 'modules/mod_phz_image_with_link/';


$scripts = array_keys($document->_scripts);
$scriptFound = false;

foreach($scripts as $script) {
	if(strpos($script,'jquery') !== false) {
		$scriptFound = true;
		break;
	}
}
 if(!$scriptFound) {
 	$document->addScript("//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js");
 }

$document->addScript($modulePath.'tmpl/js/scripts.js');
$document->addStyleSheet($modulePath.'tmpl/css/stylesheet.css');

?>

<div class="imagebox w<?php echo $width ?>"

	style="
		<?php if(isset($text_position) && $text_position == 0) {?>
			<?php if(isset($image) && $image != ''){?>
						background-image:url( <?php echo $image; ?>);
			<?php }?>
		<?php } ?>
		<?php if(isset($background_color) && $background_color != ''){?>
					background-color: <?php echo $background_color; ?>;
		<?php }?>

		<?php if(isset($height) && $height != ''){?>
					height: <?php echo $height; ?>px;
		<?php }?>
	"
>
	<?php if(  (!isset($text_position) && (isset($opacity) && $opacity != 0)) || ( $text_position==0 && isset($opacity) && $opacity != 0 ) ){?>
		<div class="silhoutte" style="
		 	-khtml-opacity: .<?php echo $opacity; ?>;
	        -moz-opacity: .<?php echo $opacity; ?>;
			-ms-filter: 'alpha(opacity=<?php echo $opacity; ?>)';
			filter: alpha(opacity=<?php echo $opacity; ?>);
			filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0.<?php echo $opacity; ?>;);
			opacity: .<?php echo $opacity; ?>;;
		"></div>
	<?php }?>

	<div class="texts text-position<?php echo $text_position; ?>"
		style="
		<?php if(isset($text_position) && $text_position != 0) {?>
			<?php if(isset($background_color) && $background_color != ''){?>
					background-color: <?php echo $background_color; ?>;
			<?php }?>
		<?php }?>
		<?php if(isset($text_position) && ( $text_position == 1 || $text_position == 3 )) {?>
			<?php if(isset($height) && $height != ''){?>
					height: <?php echo $height; ?>px;
				<?php }?>
		<?php }?>
		">
		<div class="link-title">
			<p
				style="
					<?php if(isset($font_color) && $font_color != ''){?>
						color: <?php echo $font_color; ?>
					<?php }?>
			"><?php echo $title;?></p>
			<div class="link">
				<a
				style="
					<?php if(isset($font_color) && $font_color != ''){?>
						border-color: <?php echo $font_color; ?>;
						color: <?php echo $font_color; ?>;
					<?php }?>
				"
				href="<?php echo $link; ?>" <?php if(isset($target) && $target == '1') {echo "target=\"_blank\""; } ?>><?php echo $linktext; ?> <strong>&#8594;</strong></a>
			</div>
		</div>
	</div>
	<?php if(isset($text_position) && $text_position != 0) {?>
		<?php if(isset($image) && $image != ''){?>
			<div class="image text-position<?php echo $text_position; ?>" style="
				<?php if(isset($image) && $image != ''){?>
					background-image:url( <?php echo $image; ?>);
				<?php }?>
				<?php if(isset($height) && $height != ''){?>
					height: <?php echo $height; ?>px;
				<?php }?>
			">
				<?php if(   isset($opacity) && $opacity != 0 ){?>
				<div class="silhoutte" style="
				 	-khtml-opacity: .<?php echo $opacity; ?>;
			        -moz-opacity: .<?php echo $opacity; ?>;
					-ms-filter: 'alpha(opacity=<?php echo $opacity; ?>)';
					filter: alpha(opacity=<?php echo $opacity; ?>);
					filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0.<?php echo $opacity; ?>;);
					opacity: .<?php echo $opacity; ?>;;
				"></div>
			<?php }?>
			</div>
		<?php }?>

	<?php }?>
</div>

