<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update an existing warehouse
 *
 * Updates an existing warehouse. The ID of the warehouse must be specified.
 */
class UpdateExistingWarehouse extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/{$this->id}";
	}


	/**
	 * @param int $id The ID of the warehouse
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
