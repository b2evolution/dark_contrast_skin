<?php
/**
 * This is the sidebar include template.
 *
 * For a quick explanation of b2evo 2.0 skins, please start here:
 * {@link http://manual.b2evolution.net/Skins_2.0}
 *
 * This is meant to be included in a page template.
 *
 * @package evoskins
 * @subpackage dark_contrast
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );
?>

<div id="sidebarwrap">

	<div id="sidebarr">
		<ul>
		<?php
			// ------------------------- "Sidebar" CONTAINER EMBEDDED HERE --------------------------
			// Display container contents:
			skin_container( NT_('Sidebar 2'), array(
					// The following (optional) params will be used as defaults for widgets included in this container:
					// This will enclose each widget in a block:
					'block_start' => '<li class="$wi_class$">',
					'block_end' => '</li>',
					// This will enclose the title of each widget:
					'block_title_start' => '<h2>',
					'block_title_end' => '</h2>',
					// If a widget displays a list, this will enclose that list:
					'list_start' => '<ul>',
					'list_end' => '</ul>',
					// This will enclose each item in a list:
					'item_start' => '<li>',
					'item_end' => '</li>',
					// This will enclose sub-lists in a list:
					'group_start' => '<ul>',
					'group_end' => '</ul>',
					// This will enclose (foot)notes:
					'notes_start' => '<div class="notes">',
					'notes_end' => '</div>',
				) );
			// ----------------------------- END OF "Sidebar" CONTAINER -----------------------------
		?>
		</ul>

<?php

echo "<p align=\"center\"><a href=\"http://validator.w3.org/check?uri=referer\"><img src=\"http://www.w3.org/Icons/valid-xhtml10-blue\" alt=\"Valid XHTML 1.0 Transitional\" align=\"middle\" height=\"31\" style=\"border:0\" width=\"88\" /></a><br/> \n";
echo "</p>\n";
echo "<p align=\"center\">\n";
echo "<a href=\"http://jigsaw.w3.org/css-validator/check/referer\">  <img style=\"border:0\" width=\"88\" height=\"31\" src=\"http://jigsaw.w3.org/css-validator/images/vcss-blue\" align=\"middle\" alt=\"Valid CSS!\" /></a></p><br/>\n";
echo "<p align=\"center\"><a href=\"http://www.b2evolution.net\"><img src=\"img/b2darkc.gif\" style=\"border:0\" alt=\"b2evolution website\" width=\"140\" height=\"54\" /></a></p>";
?>
	</div>

</div>