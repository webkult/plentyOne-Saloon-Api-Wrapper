<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create an attribute
 *
 * Creates an attribute.
 */
class CreateAttribute extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes";
	}


	public function __construct()
	{
	}
}
