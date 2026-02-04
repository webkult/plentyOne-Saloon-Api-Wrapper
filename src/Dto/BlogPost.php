<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class BlogPost extends SpatieData
{
	public function __construct(
		public ?string $id = null,
		public ?string $plentyIdHash = null,
		public ?string $data = null,
	) {
	}
}
