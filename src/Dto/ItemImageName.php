<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ItemImageName extends SpatieData
{
	public function __construct(
		public ?int $imageId = null,
		public ?string $lang = null,
		public ?string $name = null,
		public ?string $alternate = null,
	) {
	}
}
