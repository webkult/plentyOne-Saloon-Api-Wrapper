<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Export extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?string $type = null,
		public ?int $limit = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?string $formatKey = null,
		public ?string $outputType = null,
		public ?int $generateCache = null,
	) {
	}
}
