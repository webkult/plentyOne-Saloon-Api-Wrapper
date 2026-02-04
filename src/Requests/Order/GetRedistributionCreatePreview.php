<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Get a redistribution create preview.
 *
 * Returns a redistribution preview for the given order data without creating a redistribution.
 */
class GetRedistributionCreatePreview extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/redistributions/preview";
	}


	public function __construct()
	{
	}
}
