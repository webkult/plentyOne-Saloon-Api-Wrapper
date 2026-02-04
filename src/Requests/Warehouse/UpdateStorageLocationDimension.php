<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a storage location dimension
 *
 * Updates a storage location dimension
 */
class UpdateStorageLocationDimension extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/dimensions/{$this->warehouseLocationDimensionId}";
	}


	/**
	 * @param int $warehouseLocationDimensionId The ID of the storage location dimension
	 * @param null|string $name The name of the storage location dimension
	 * @param null|bool $displayInName The display in name flag of the storage location dimension
	 * @param null|string $shortcut The shortcut of the storage location dimension
	 * @param null|string $separator The separator of the storage location dimension
	 * @param null|bool $isActiveForPickupPath Active flag for pickup path of the storage location dimension
	 */
	public function __construct(
		protected int $warehouseLocationDimensionId,
		protected ?string $name = null,
		protected ?bool $displayInName = null,
		protected ?string $shortcut = null,
		protected ?string $separator = null,
		protected ?bool $isActiveForPickupPath = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'name' => $this->name,
			'displayInName' => $this->displayInName,
			'shortcut' => $this->shortcut,
			'separator' => $this->separator,
			'isActiveForPickupPath' => $this->isActiveForPickupPath,
		]);
	}
}
