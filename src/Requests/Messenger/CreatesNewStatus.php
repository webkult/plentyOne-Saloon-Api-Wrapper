<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Creates a new status
 *
 * Creates a new status
 */
class CreatesNewStatus extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/statuses";
	}


	public function __construct()
	{
	}
}
