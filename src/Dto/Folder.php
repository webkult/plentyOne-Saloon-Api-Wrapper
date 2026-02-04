<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Folder extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?bool $isDeletable = null,
		public ?int $position = null,
		public ?bool $isSelectable = null,
	) {
	}
}
