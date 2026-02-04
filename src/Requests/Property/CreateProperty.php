<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a property
 *
 * Creates a property. At least one property name must be specified.
 */
class CreateProperty extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties";
	}


	public function __construct()
	{
	}
}
