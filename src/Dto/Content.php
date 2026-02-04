<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Content extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $dataProviderName = null,
		public ?string $type = null,
		public ?string $widgets = null,
		public ?array $dropzones = null,
	) {
	}
}
