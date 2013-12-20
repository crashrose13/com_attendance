<?php
/**
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Banners component helper.
 *
 * @package		Joomla.Administrator
 * @subpackage	com_attendance
 */
class attendanceHelper
{
	/**
	 * Configure the Linkbar.
	 *
	 * @param	string	The name of the active view.
	 *
	 */
	public static function addSubmenu($vName)
	{
		JSubMenuHelper::addEntry(
			JText::_('COM_ATTENDANCE_SUBMENU_EVENTS'),
			'index.php?option=com_attendance&view=events',
			$vName == 'events'
		);

		JSubMenuHelper::addEntry(
			JText::_('COM_ATTENDANCE_SUBMENU_LOCATIONS'),
			'index.php?option=com_attendance&view=locations',
			$vName == 'locations'
		);

		JSubMenuHelper::addEntry(
			JText::_('COM_ATTENDANCE_SUBMENU_EVENT_TYPES'),
			'index.php?option=com_attendance&view=types',
			$vName == 'types'
		);
	}
	
}