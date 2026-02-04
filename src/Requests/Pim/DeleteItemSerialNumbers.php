<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete item serial numbers
 *
 * Deletes a list of item serial numbers. Returns a collection
 */
class DeleteItemSerialNumbers extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/item-serial-numbers";
	}


	public function __construct()
	{
	}
}
