<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AddressWarehouseRelation extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $warehouseId = null,
		public ?int $typeId = null,
		public ?int $addressId = null,
	) {
	}
}
