<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a new conversation
 *
 * Create a new conversation
 */
class CreateNewConversation extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations";
	}


	public function __construct()
	{
	}
}
