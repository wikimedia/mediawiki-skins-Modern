<?php
/**
 * Modern skin
 *
 * @file
 * @ingroup Skins
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'SkinModern',
	'url' => 'https://www.mediawiki.org/wiki/Skin:Modern',
	'descriptionmsg' => 'modern-desc',
);

$dir = __DIR__;

// Register files
$wgAutoloadClasses['SkinModern'] = $dir . '/SkinModern.php';
$wgAutoloadClasses['ModernTemplate'] = $dir . '/SkinModern.php';
$wgMessagesDirs['CologneBlue'] = $dir . '/i18n';

// Register skin
$wgValidSkinNames['modern'] = 'Modern';

// Register modules
$wgResourceModules['skins.modern'] = array(
	'styles' => array(
		'resources/main.css' => array( 'media' => 'screen' ),
		'resources/print.css' => array( 'media' => 'print' ),
	),
	'remoteExtPath' => 'Modern',
	'localBasePath' => $dir,
);
