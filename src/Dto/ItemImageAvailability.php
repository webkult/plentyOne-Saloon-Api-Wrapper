<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ItemImageAvailability extends SpatieData
{
	public function __construct(
		public ?int $imageId = null,
		public ?string $type = null,
		public int|float|null $value = null,
	) {
	}
}
