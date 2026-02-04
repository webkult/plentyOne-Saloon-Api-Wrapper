<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a property selection
 *
 * Creates a property selection.
 */
class CreatePropertySelection extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/items/properties/{$this->propertyId}/selections";
	}


	/**
	 * @param int $propertyId
	 */
	public function __construct(
		protected int $propertyId,
	) {
	}
}
