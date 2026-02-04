<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create an attribute value market name
 *
 * Creates an attribute value market name.
 */
class CreateAttributeValueMarketName extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/{$this->attributeId}/value_market_names";
	}


	/**
	 * @param int $attributeId
	 */
	public function __construct(
		protected int $attributeId,
	) {
	}
}
