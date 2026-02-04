<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class CategoryTemplate extends SpatieData
{
	public function __construct(
		public ?int $categoryId = null,
		public ?int $plentyId = null,
		public ?string $lang = null,
		public ?string $content = null,
	) {
	}
}
