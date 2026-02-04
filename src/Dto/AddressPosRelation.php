<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AddressPosRelation extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $posBaseId = null,
		public ?string $addressId = null,
		public ?int $typeId = null,
	) {
	}
}
