<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class WarehouseLocationLevel extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $parentId = null,
		public ?int $dimensionId = null,
		public ?int $position = null,
		public ?string $name = null,
		public ?string $type = null,
		public ?string $pathName = null,
	) {
	}
}
