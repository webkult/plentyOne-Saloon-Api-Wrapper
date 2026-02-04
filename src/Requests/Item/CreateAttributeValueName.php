<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create an attribute value name
 *
 * Creates an attribute value name.
 */
class CreateAttributeValueName extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attribute_values/{$this->valueId}/names";
	}


	/**
	 * @param int $valueId
	 */
	public function __construct(
		protected int $valueId,
	) {
	}
}
