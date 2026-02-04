<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a property relation selection
 *
 * Creates a property relation selection.
 */
class CreatePropertyRelationSelection extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/uuid/relations/selections";
	}


	public function __construct()
	{
	}
}
