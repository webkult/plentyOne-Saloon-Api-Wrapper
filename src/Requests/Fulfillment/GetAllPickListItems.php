<?php

namespace PlentyOne\Api\Requests\Fulfillment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get all pick list items
 *
 * Gets a collection of pick list items.
 */
class GetAllPickListItems extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/fulfillment/picklist/picking_order_item";
	}


	public function __construct()
	{
	}
}
