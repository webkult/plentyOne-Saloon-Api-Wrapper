<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationClient extends SpatieData
{
	public function __construct(
		public ?int $variationId = null,
		public ?int $plentyId = null,
		public ?string $createdAt = null,
	) {
	}
}
