<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ItemCrossSelling extends SpatieData
{
	public function __construct(
		public ?int $itemId = null,
		public ?int $crossItemId = null,
		public ?string $relationship = null,
		public ?bool $isDynamic = null,
	) {
	}
}
