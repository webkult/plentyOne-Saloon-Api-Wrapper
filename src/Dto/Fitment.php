<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Fitment extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $marketId = null,
		public ?string $name = null,
		public ?int $categoryId = null,
	) {
	}
}
