<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationImage extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $itemId = null,
		public ?int $variationId = null,
		public ?int $imageId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
