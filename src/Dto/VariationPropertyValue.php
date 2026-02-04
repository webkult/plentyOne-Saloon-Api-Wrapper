<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationPropertyValue extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $variationId = null,
		public ?int $propertyId = null,
		public ?int $propertySelectionId = null,
		public ?int $valueInt = null,
		public int|float|null $valueFloat = null,
		public ?string $valueFile = null,
		public int|float|null $surcharge = null,
	) {
	}
}
