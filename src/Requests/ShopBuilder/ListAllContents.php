<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all contents.
 *
 * Lists all available ShopBuilder contents.
 */
class ListAllContents extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/contents";
	}


	public function __construct()
	{
	}
}
