<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update item sets
 *
 * Updates the item sets.
 */
class UpdateItemSets extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/item_sets";
	}


	public function __construct()
	{
	}
}
