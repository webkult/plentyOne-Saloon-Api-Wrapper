<?php

namespace PlentyOne\Api\Requests\MailTemplates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the email of a contact or order based on the receiver type
 *
 * Get the email of a contact or order based on the receiver type
 */
class GetTheEmailOfContactOrOrderBasedOnTheReceiverType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/mail_templates/email_service/getRecipient";
	}


	public function __construct()
	{
	}
}
