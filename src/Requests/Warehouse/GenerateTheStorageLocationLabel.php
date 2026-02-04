<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Generate the storage location label
 *
 * Generates the storage location label
 */
class GenerateTheStorageLocationLabel extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/{$this->warehouseId}/label";
	}


	/**
	 * @param int $warehouseId The actual warehouse ID
	 * @param string $warehouseLocationIds A string with all storage location ID's for which a label needs to be generated
	 */
	public function __construct(
		protected int $warehouseId,
		protected string $warehouseLocationIds,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['warehouseLocationIds' => $this->warehouseLocationIds]);
	}
}
