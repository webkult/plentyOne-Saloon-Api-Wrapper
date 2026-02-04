<?php

namespace PlentyOne\Api\Requests\AddressDesign;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get default layout
 *
 * Gets the default layout. If no layout is set as default, the layout with the lowest ID will be
 * returned.
 */
class GetDefaultLayout extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/address_layout/default";
	}


	public function __construct()
	{
	}
}
