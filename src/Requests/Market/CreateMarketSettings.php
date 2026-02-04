<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create market settings
 *
 * Creates new market settings by given data. The marketplace ID and the type must be specified.
 */
class CreateMarketSettings extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/settings/bulk";
	}


	public function __construct()
	{
	}
}
