<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Credentials extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $environment = null,
		public ?string $status = null,
		public ?array $data = null,
		public ?string $market = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
