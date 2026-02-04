<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Settings extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $marketplaceId = null,
		public ?string $type = null,
		public ?array $settings = null,
	) {
	}
}
