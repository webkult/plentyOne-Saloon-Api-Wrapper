<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List item label templates
 *
 * Lists the ID and name of all item label templates saved in the system.
 */
class ListItemLabelTemplates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/labels";
	}


	public function __construct()
	{
	}
}
