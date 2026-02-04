<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an additional SKU
 *
 * Updates an additional SKU. The ID of the additional SKU must be specified.
 */
class UpdateAdditionalSku extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_additional_skus/{$this->additionalSkuId}";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $additionalSkuId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected int $additionalSkuId,
	) {
	}
}
