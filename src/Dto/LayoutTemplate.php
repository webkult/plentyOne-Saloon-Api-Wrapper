<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class LayoutTemplate extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?string $css = null,
		public ?string $htmlStructure = null,
		public ?string $mainFrame = null,
		public ?array $additionalContent = null,
		public ?string $appendixType = null,
	) {
	}
}
