<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create item serial numbers
 *
 * Creates a list of item serial numbers. Returns a collection
 */
class CreateItemSerialNumbers extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/item-serial-numbers";
	}


	public function __construct()
	{
	}
}
