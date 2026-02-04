<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a warehouse
 *
 * Deletes a warehouse. The ID of the warehouse must be specified.
 */
class DeleteWarehouse extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/{$this->id}";
	}


	/**
	 * @param int $id The ID of the warehouse
	 * @param null|int $newWarehouseId The ID of the warehouse to which the orders should be transferred
	 */
	public function __construct(
		protected int $id,
		protected ?int $newWarehouseId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['newWarehouseId' => $this->newWarehouseId]);
	}
}
