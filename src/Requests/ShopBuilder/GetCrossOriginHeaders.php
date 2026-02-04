<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get cross origin headers.
 *
 * Get cross origin headers.
 */
class GetCrossOriginHeaders extends Request
{
	protected Method $method = Method::OPTIONS;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/widgets";
	}


	public function __construct()
	{
	}
}
