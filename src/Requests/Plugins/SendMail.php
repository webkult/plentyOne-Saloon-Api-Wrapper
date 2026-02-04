<?php

namespace PlentyOne\Api\Requests\Plugins;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Send mail
 *
 * Sends a mail from booted plugins.
 */
class SendMail extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/plugins_mail";
	}


	public function __construct()
	{
	}
}
