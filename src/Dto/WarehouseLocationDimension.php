<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class WarehouseLocationDimension extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $parentId = null,
		public ?int $warehouseId = null,
		public ?int $level = null,
		public ?string $name = null,
		public ?string $shortcut = null,
		public ?string $separator = null,
		public ?int $displayInName = null,
		public ?int $isActiveForPickupPath = null,
	) {
	}
}
