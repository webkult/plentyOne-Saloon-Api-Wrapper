<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Creates a new event
 *
 * Creates a new event
 */
class CreatesNewEvent extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/events";
	}


	public function __construct()
	{
	}
}
