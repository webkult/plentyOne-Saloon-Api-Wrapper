<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AddressOrderRelation extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $orderId = null,
		public ?int $typeId = null,
		public ?int $addressId = null,
	) {
	}
}
