<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 * xoModuleIcons16 Smarty compiler plug-in
 *
 * @copyright   The XOOPS project http://www.xoops.org/
 * @license     http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		Andricq Nicolas (AKA MusS) 
 * @since       2.5.2
 * @version		$Id: compiler.xoModuleIconsBookmarks.php 8066 2011-11-06 05:09:33Z beckmi $
 */

function smarty_compiler_xoModuleIconsBookmarks($argStr, &$smarty)
{
    global $xoops, $xoTheme;
       
//    $icons = xoops_getModuleOption('typeicons', 'system');
//    if ( $icons == '' ) $icons = 'default';
    
if ( file_exists( $xoops->path('Frameworks/moduleclasses/icons/bookmarks/index.html'))) {
        $url = $xoops->url( 'Frameworks/moduleclasses/icons/bookmarks/' . $argStr );    
    } else {
        if ( file_exists( $xoops->path('modules/system/images/icons/default/' . $argStr ))) {
            $url = $xoops->url( 'modules/system/images/icons/default/' . $argStr );
        } else {
            $url = $xoops->url( 'modules/system/images/icons/default/xoops/xoops.png' );
        }
    }
    return "\necho '" . addslashes( $url ) . "';";
}
?>