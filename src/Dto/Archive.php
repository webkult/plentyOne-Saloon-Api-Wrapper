<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Archive extends SpatieData
{
	public function __construct(
		public ?string $file = null,
		public ?int $month = null,
		public ?int $year = null,
		public ?int $size = null,
		public ?string $status = null,
	) {
	}
}
