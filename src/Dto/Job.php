<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Job extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $position = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
