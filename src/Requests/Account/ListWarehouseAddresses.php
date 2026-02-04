<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List warehouse addresses
 *
 * List warehouse addresses. The ID of the warehouse, the address and the ID of the relation type must
 * be specified.
 */
class ListWarehouseAddresses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/stockmanagement/warehouses/{$this->warehouseId}/addresses/{$this->relationTypeId}";
	}


	/**
	 * @param int $warehouseId
	 * @param int $relationTypeId
	 */
	public function __construct(
		protected int $warehouseId,
		protected int $relationTypeId,
	) {
	}
}
