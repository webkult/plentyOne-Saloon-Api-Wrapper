<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a fitment
 *
 * Create a new fitment for the given data.
 */
class CreateFitment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/ebay/parts-fitments";
	}


	public function __construct()
	{
	}
}
