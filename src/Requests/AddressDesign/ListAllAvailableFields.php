<?php

namespace PlentyOne\Api\Requests\AddressDesign;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all available fields
 *
 * Lists all available fields.
 */
class ListAllAvailableFields extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/address_layout_fields";
	}


	public function __construct()
	{
	}
}
