<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ItemSpecific extends SpatieData
{
	public function __construct(
		public ?string $name = null,
		public ?int $minValues = null,
		public ?int $maxValues = null,
		public ?string $selectionMode = null,
		public ?string $valueType = null,
		public ?string $valueFormat = null,
		public ?string $helpText = null,
		public ?string $helpUrl = null,
		public ?string $variationPicture = null,
		public ?string $variationSpecifics = null,
		public ?array $values = null,
	) {
	}
}
