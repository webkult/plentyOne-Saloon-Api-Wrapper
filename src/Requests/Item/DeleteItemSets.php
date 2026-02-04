<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete item sets
 *
 * Delete the item sets.
 */
class DeleteItemSets extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/item_sets";
	}


	public function __construct()
	{
	}
}
