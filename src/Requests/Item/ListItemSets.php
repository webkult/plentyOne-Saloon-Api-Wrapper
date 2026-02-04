<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List item sets
 *
 * Lists all item sets.
 */
class ListItemSets extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/item_sets";
	}


	public function __construct()
	{
	}
}
