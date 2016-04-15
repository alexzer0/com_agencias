<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Get an instance of the controller prefixed by HelloWorld
$controller = JControllerLegacy::getInstance('Agencias');
require_once JPATH_COMPONENT . '/helpers/login.php';  //<-- this is our missing code that will tie things together between the view and the helper

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));
// Include the login functions only once
require_once __DIR__ . '/helper.php';

$params->def('greeting', 1);

$type	          = ModLoginHelper::getType();
$return	          = ModLoginHelper::getReturnUrl($params, $type);
$twofactormethods = ModLoginHelper::getTwoFactorMethods();
$user	          = JFactory::getUser();
$layout           = $params->get('layout', 'default');

// Logged users must load the logout sublayout
if (!$user->guest)
{
	$layout .= '_logout';
}

require JModuleHelper::getLayoutPath('mod_login', $layout);

// Redirect if set by the controller
$controller->redirect();
