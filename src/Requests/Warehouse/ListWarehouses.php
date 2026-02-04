<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List warehouses
 *
 * Lists all warehouses. The results can be filtered.
 */
class ListWarehouses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'repairWarehouse' = Associated repair warehouse.</li><li>'storageLocations' = The storage locations of the warehouse.</li><li>'dimensions' = The dimensions of the warehouse</li></ul>
	 * @param null|int $id The ID of the warehouse. Allowed operators: `eq`, `not`, `in`, `nin`
	 * @param null|string $name The name of the warehouse. Allowed operators: `eq`, `not`, `in`, `nin`, `like`
	 * @param null|int $priority The priority of the warehouse. Allowed operators: `eq`, `not`, `in`, `nin`, `lt`, `lte`, `gt`, `gte`, `between`
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?int $id = null,
		protected ?string $name = null,
		protected ?int $priority = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with, 'id' => $this->id, 'name' => $this->name, 'priority' => $this->priority]);
	}
}
