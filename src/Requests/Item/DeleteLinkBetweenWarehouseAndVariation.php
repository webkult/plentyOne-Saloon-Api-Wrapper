<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete link between a warehouse and a variation
 *
 * Deletes the link between a warehouse and a variation. The ID of the variation and the ID of the
 * warehouse must be specified.
 */
class DeleteLinkBetweenWarehouseAndVariation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/variation_warehouses/{$this->warehouseId}";
	}


	/**
	 * @param int $id
	 * @param int $variationId
	 * @param int $warehouseId
	 */
	public function __construct(
		protected int $id,
		protected int $variationId,
		protected int $warehouseId,
	) {
	}
}
