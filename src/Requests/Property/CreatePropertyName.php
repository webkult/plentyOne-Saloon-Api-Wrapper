<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a property name
 *
 * Creates a property name.
 */
class CreatePropertyName extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/names";
	}


	public function __construct()
	{
	}
}
