<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update item serial numbers
 *
 * Updates a list of item serial numbers. Returns a collection
 */
class UpdateItemSerialNumbers extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/item-serial-numbers";
	}


	public function __construct()
	{
	}
}
