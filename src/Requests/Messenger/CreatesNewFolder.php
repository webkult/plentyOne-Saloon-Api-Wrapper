<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Creates a new folder
 *
 * Creates a new folder. Important! The userId property will be automatically set based on the current
 * logged in user.
 */
class CreatesNewFolder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/folders";
	}


	public function __construct()
	{
	}
}
