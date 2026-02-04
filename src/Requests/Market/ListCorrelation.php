<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List correlation
 *
 * Lists correlations. The type, the market settings ID and the correlation ID must be specified.
 */
class ListCorrelation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/settings/correlations";
	}


	public function __construct()
	{
	}
}
