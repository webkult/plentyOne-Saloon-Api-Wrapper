<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an SKU
 *
 * Updates an SKU. The ID of the SKU must be specified.
 */
class UpdateSku extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_skus/{$this->skuId}";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $skuId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected int $skuId,
	) {
	}
}
