<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class TagRelationship extends SpatieData
{
	public function __construct(
		public ?int $tagId = null,
		public ?string $type = null,
		public ?string $value = null,
		#[MapName('UUID5')]
		public ?string $uuid5 = null,
	) {
	}
}
