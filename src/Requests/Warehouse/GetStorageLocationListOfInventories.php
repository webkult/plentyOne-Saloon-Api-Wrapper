<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a storage location list of inventories
 *
 * Gets a storage location list of inventories by storage location id. The storage location ID is
 * required.
 */
class GetStorageLocationListOfInventories extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/inventory/list";
	}


	public function __construct()
	{
	}
}
