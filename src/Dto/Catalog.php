<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Catalog extends SpatieData
{
	public function __construct(
		public ?array $data = null,
		public ?array $settings = null,
		public ?string $name = null,
		public ?string $template = null,
		public ?string $id = null,
		public ?bool $active = null,
		public ?bool $showMandatoryFields = null,
		public ?string $updatedAt = null,
		public ?string $createdAt = null,
	) {
	}
}
