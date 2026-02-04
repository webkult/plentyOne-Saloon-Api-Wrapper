<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a storage location layout
 *
 * Creates a storage location layout
 */
class CreateStorageLocationLayout extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/layouts";
	}


	/**
	 * @param int $parentId The parent ID of the storage location dimension
	 * @param int $warehouseId The warehouse ID of the storage location dimension
	 * @param int $level The level of the storage location dimension
	 * @param string $name The name of the storage location dimension
	 * @param string $shortcut The shortcut of the storage location dimension
	 * @param string $separator The separator of the storage location dimension
	 * @param int $isActiveForPickupPath Active flag for pickup path of the storage location dimension
	 * @param int $dimensionId The storage location dimension ID of the storage location level
	 * @param int $position The position of the storage location level
	 * @param int $levelId The storage location level ID of the storage location
	 * @param string $label The label of the storage location
	 * @param string $purposeKey The location type key of the storage location
	 * @param string $statusKey The location status key of the storage location
	 */
	public function __construct(
		protected int $parentId,
		protected int $warehouseId,
		protected int $level,
		protected string $name,
		protected string $shortcut,
		protected string $separator,
		protected int $isActiveForPickupPath,
		protected int $dimensionId,
		protected int $position,
		protected int $levelId,
		protected string $label,
		protected string $purposeKey,
		protected string $statusKey,
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
			'dimensionId' => $this->dimensionId,
			'position' => $this->position,
			'levelId' => $this->levelId,
			'label' => $this->label,
			'purposeKey' => $this->purposeKey,
			'statusKey' => $this->statusKey,
		]);
	}
}
