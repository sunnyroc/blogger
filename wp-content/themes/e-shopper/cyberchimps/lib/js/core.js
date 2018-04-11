/**
 * Title: Core JS
 *
 * Description: Defined all custom JS for core.
 *
 * Please do not edit this file. This file is part of the CyberChimps Framework and all modifications
 * should be made in a child theme.
 *
 * @category CyberChimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v3.0 (or later)
 * @link     http://www.cyberchimps.com/
 */

jQuery(document).ready(function () {

	// On click on HTML.
	jQuery('html').click(function () {

		// Check if mobile menu is open.
		if (jQuery('#navbar').hasClass('in')) {

			// Close mobile menu.
			jQuery('#navbar').collapse('toggle');
		}
	});
	
	// Stop propagation on click on search in the menu bar.
	jQuery('#navigation .search-query').click(function(event){
		event.stopPropagation();
	});
});