<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ItemListingCategory extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?string $fullName = null,
		public ?int $parentId = null,
		public ?bool $isLeaf = null,
	) {
	}
}
