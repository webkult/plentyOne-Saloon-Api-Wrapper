<?php

namespace PlentyOne\Api\Requests\AddressDesign;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all layouts with their contents
 *
 * Lists all layouts including the content for each layout.
 */
class ListAllLayoutsWithTheirContents extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/address_layout";
	}


	public function __construct()
	{
	}
}
