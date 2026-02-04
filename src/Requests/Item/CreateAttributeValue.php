<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create an attribute value
 *
 * Creates an attribute value.
 */
class CreateAttributeValue extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/{$this->attributeId}/values";
	}


	/**
	 * @param int $attributeId
	 */
	public function __construct(
		protected int $attributeId,
	) {
	}
}
