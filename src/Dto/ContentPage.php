<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ContentPage extends SpatieData
{
	public function __construct(
		public ?string $identifier = null,
		public ?string $caption = null,
	) {
	}
}
