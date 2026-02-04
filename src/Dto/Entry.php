<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Entry extends SpatieData
{
	public function __construct(
		public ?string $subject = null,
		public ?string $body = null,
		public ?string $kind = null,
	) {
	}
}
