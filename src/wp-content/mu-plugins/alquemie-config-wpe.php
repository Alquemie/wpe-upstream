<?php
/*
Plugin Name: Alquemie Config - WPE
Description: Wordpress Configuration Best Practices as defined by Chris Carrel
Version: 0.2.2
Author: Chris Carrel
Author URI: https://www.linkedin.com/in/chriscarrel
License:     GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

------------------------------------------------------------------------

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/

if ( !defined('ABSPATH') ) {
	header( 'HTTP/1.0 403 Forbidden' );
	die;
}

if (is_dir(WPMU_PLUGIN_DIR.'/alquemie-config')) {
    require_once WPMU_PLUGIN_DIR.'/alquemie-config/alquemie-config.php';
}

