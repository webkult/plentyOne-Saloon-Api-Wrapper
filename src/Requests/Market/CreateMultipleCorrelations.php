<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create multiple correlations
 *
 * Creates multiple correlations. The type, market settings ID and the correlation ID for each param
 * combination must be specified.
 */
class CreateMultipleCorrelations extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/settings/correlations/bulk";
	}


	public function __construct()
	{
	}
}
