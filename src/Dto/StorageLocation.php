<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class StorageLocation extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $warehouseId = null,
		public ?int $rackId = null,
		public ?int $shelfId = null,
		public ?string $name = null,
		public ?int $type = null,
		public ?int $position = null,
	) {
	}
}
