<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Filter extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?int $exportId = null,
		public ?string $key = null,
		public ?string $value = null,
	) {
	}
}
