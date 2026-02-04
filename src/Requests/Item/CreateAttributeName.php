<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create an attribute name
 *
 * Creates an attribute name in the specified language. The language code must be specified.
 */
class CreateAttributeName extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/{$this->attributeId}/names";
	}


	/**
	 * @param int $attributeId
	 */
	public function __construct(
		protected int $attributeId,
	) {
	}
}
