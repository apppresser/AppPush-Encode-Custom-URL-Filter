<?php
/*
Plugin Name: AppPush Escape Custom URL Filter
Plugin URI: http://apppresser.com
Description: Encode the custom URL sent of Push Notifications for AppPresser
Version: 1.0.0
Author: AppPresser Team
Author URI: http://apppresser.com
License: GPLv2
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

function apppush_encode_custom_url( $data ) {

	if( !empty( $data['url'] ) && strpos( $data['url'], 'http' ) === 0 ) {
		$data['url'] = urlencode( $data['url'] );
	}

	return $data;
}
add_filter( 'ap3_send_push_data', 'apppush_encode_custom_url', 10, 1 );
