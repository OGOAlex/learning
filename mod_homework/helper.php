<?php
/**
* @package		Joomla.Site
* @subpackage	mod_breadcrumbs
* @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
* @license		GNU General Public License version 2 or later; see LICENSE.txt
*/

// no direct access
defined('_JEXEC') or die;

class modHomework
{
    public static function sendMail(){
		$data = JRequest::get('post');
        $to = $data['email'];
        $subject = $data['subject'];
        $body = $data['body'];
		$message = JFactory::getMailer();
		$message->addRecipient($to);
		$message->setSubject($subject);
		$message->setBody($body);
		$message->send();
		/*
        mail($to,$subject,$body);*/
    }
}