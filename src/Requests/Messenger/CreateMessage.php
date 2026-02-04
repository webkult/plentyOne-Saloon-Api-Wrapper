<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create message
 *
 * Creates a new message.
 */
class CreateMessage extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/messages";
	}


	public function __construct()
	{
	}
}
