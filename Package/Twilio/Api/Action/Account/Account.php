<?php
namespace Library\Twilio\Api\Action\Account;
use Library\Twilio\Api\Resource\Instance;
use Library\Twilio\Api\Action\Account\Sandbox;

/**
 * Twilio account instance
 *
 * @package Library
 * @subpackage Twilio\Api\Action\Account
 * @author Aleksey Korzun <al.ko@webfoundation.net>
 */
class Account extends Instance
{
	/**
	 * Initializer
	 *
	 * @return void
	 */
	protected function _init()
	{
		// Setup actions
		$this->_setupActions(
								'applications',
								'available_phone_numbers',
								'outgoing_caller_ids',
								'calls',
								'conferences',
								'incoming_phone_numbers',
								'notifications',
								'outgoing_callerids',
								'recordings',
								'sms_messages',
								'transcriptions',
								'connect_apps',
								'authorized_connect_apps'
							);

		// Initialize sandbox
		$this->sandbox = new Sandbox();
		$this->sandbox->setUri($this->uri() . '/Sandbox');
	}
}