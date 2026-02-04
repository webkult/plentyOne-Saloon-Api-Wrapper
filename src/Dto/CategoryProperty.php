<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class CategoryProperty extends SpatieData
{
	public function __construct(
		public ?int $categoryId = null,
		public int|float|null $marketId = null,
		public ?int $plentyId = null,
		public ?string $value = null,
	) {
	}
}
