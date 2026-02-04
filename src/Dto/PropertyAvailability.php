<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PropertyAvailability extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $propertyId = null,
		public ?string $type = null,
		public int|float|null $value = null,
	) {
	}
}
