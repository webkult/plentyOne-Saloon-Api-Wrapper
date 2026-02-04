<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class TagName extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $tagId = null,
		public ?string $tagLang = null,
		public ?string $tagName = null,
	) {
	}
}
