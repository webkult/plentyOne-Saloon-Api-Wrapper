<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationDescription extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $itemId = null,
		public ?string $lang = null,
		public ?string $name = null,
		public ?string $title = null,
		public ?string $name2 = null,
		public ?string $name3 = null,
		public ?string $previewDescription = null,
		public ?string $metaDescription = null,
		public ?string $description = null,
		public ?string $technicalData = null,
		public ?string $urlPath = null,
		public ?string $metaKeywords = null,
	) {
	}
}
