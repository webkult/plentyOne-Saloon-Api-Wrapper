<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PropertyName extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $propertyId = null,
		public ?string $lang = null,
		public ?string $name = null,
		public ?string $description = null,
	) {
	}
}
