<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List content pages
 *
 * List content pages from all plugins in a given plugin set.
 */
class ListContentPages extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/pages";
	}


	public function __construct()
	{
	}
}
