<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Bulk activate shipping profiles
 *
 * Activates up to 50 shipping profiles for items
 */
class BulkActivateShippingProfiles extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/items/item_shipping_profiles";
	}


	public function __construct()
	{
	}
}
