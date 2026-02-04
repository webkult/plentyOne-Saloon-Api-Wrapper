<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PropertySelection extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $propertyId = null,
		public ?int $position = null,
	) {
	}
}
