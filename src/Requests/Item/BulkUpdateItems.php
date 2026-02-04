<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Bulk update items
 *
 * Updates up to 50 items. The ID of the item must be specified.
 */
class BulkUpdateItems extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items";
	}


	public function __construct()
	{
	}
}
