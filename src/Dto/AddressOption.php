<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AddressOption extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $addressId = null,
		public ?int $typeId = null,
		public ?string $value = null,
		public ?int $position = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
