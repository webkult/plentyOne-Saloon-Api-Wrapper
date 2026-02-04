<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List content links.
 *
 * List all content links for a given plugin set.
 */
class ListContentLinks extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/content_links";
	}


	public function __construct()
	{
	}
}
