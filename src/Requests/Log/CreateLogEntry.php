<?php

namespace PlentyOne\Api\Requests\Log;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a log entry.
 *
 * Create a log entry.
 */
class CreateLogEntry extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/logs";
	}


	public function __construct()
	{
	}
}
