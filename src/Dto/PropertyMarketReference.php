<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PropertyMarketReference extends SpatieData
{
	public function __construct(
		public ?int $propertyId = null,
		public ?int $componentId = null,
		public int|float|null $marketId = null,
		public ?string $externalComponent = null,
	) {
	}
}
