<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ReturnsServiceProvider extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?int $pluginId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
