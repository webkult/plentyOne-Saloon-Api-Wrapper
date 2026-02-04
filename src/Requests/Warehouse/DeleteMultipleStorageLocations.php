<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete multiple storage locations
 *
 * Deletes multiple storage locations
 */
class DeleteMultipleStorageLocations extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations";
	}


	/**
	 * @param array $warehouseLocationIds An array containing all the ID's for the storage locations that need to be deleted
	 */
	public function __construct(
		protected array $warehouseLocationIds,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['warehouseLocationIds' => $this->warehouseLocationIds]);
	}
}
