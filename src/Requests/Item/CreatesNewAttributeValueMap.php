<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Creates a new attribute value map.
 *
 * Creates a new attribute value map.
 */
class CreatesNewAttributeValueMap extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/values/markets/maps";
	}


	public function __construct()
	{
	}
}
