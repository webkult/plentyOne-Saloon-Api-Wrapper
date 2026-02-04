<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class WarehouseLocationInventory extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		#[MapName('user_id')]
		public ?int $userId = null,
		public ?int $status = null,
		public ?int $warehouseLocationId = null,
		#[MapName('warehouse_location')]
		public ?int $warehouseLocation = null,
	) {
	}
}
