<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List stock of a variation per warehouse
 *
 * Lists stock of a variation per warehouse. The ID of the item and the ID of the variation must be
 * specified.
 */
class ListStockOfVariationPerWarehouse extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->id}/variations/{$this->variationId}/stock";
	}


	/**
	 * @param int $variationId The ID of the variation
	 * @param int $id
	 * @param int $itemId The ID of the item
	 * @param null|array $columns The properties to be loaded
	 */
	public function __construct(
		protected int $variationId,
		protected int $id,
		protected int $itemId,
		protected ?array $columns = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['itemId' => $this->itemId, 'columns' => $this->columns]);
	}
}
