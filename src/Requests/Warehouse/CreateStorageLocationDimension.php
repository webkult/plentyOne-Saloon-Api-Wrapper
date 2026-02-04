<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a storage location dimension
 *
 * Creates a storage location dimension.
 */
class CreateStorageLocationDimension extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/dimensions";
	}


	/**
	 * @param int $parentId The parent ID of the storage location dimension
	 * @param int $warehouseId The warehouse ID of the storage location dimension
	 * @param int $level The level of the storage location dimension
	 * @param string $name The name of the storage location dimension
	 * @param string $shortcut The shortcut of the storage location dimension
	 * @param string $separator The separator of the storage location dimension
	 * @param int $isActiveForPickupPath Active flag for pickup path of the storage location dimension
	 */
	public function __construct(
		protected int $parentId,
		protected int $warehouseId,
		protected int $level,
		protected string $name,
		protected string $shortcut,
		protected string $separator,
		protected int $isActiveForPickupPath,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'parentId' => $this->parentId,
			'warehouseId' => $this->warehouseId,
			'level' => $this->level,
			'name' => $this->name,
			'shortcut' => $this->shortcut,
			'separator' => $this->separator,
			'isActiveForPickupPath' => $this->isActiveForPickupPath,
		]);
	}
}
