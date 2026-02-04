<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class TagClient extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $tagId = null,
		public ?int $plentyId = null,
	) {
	}
}
