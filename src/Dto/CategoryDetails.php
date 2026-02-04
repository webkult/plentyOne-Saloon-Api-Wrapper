<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class CategoryDetails extends SpatieData
{
	public function __construct(
		public ?int $categoryId = null,
		public ?int $plentyId = null,
		public ?string $lang = null,
		public ?string $name = null,
		public ?string $description = null,
		public ?string $description2 = null,
		public ?string $shortDescription = null,
		public ?string $metaKeywords = null,
		public ?string $metaDescription = null,
		public ?string $nameUrl = null,
		public ?string $metaTitle = null,
		public ?string $image = null,
		public ?string $image2 = null,
		public ?string $imagePath = null,
		#[MapName('image2Path')]
		public ?string $image2path = null,
		public ?string $previewUrl = null,
		public ?int $position = null,
		public ?string $itemListView = null,
		public ?string $singleItemView = null,
		public ?string $pageView = null,
		public ?bool $fulltext = null,
		public ?string $metaRobots = null,
		public ?string $canonicalLink = null,
		public ?string $updatedAt = null,
		public ?string $updatedBy = null,
	) {
	}
}
