<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a list of attribute values
 *
 * Creates a list of attribute values.
 */
class CreateListOfAttributeValues extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/attributes/values";
	}


	public function __construct()
	{
	}
}
