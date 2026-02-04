<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ContactWish extends SpatieData
{
	public function __construct(
		public ?string $text = null,
	) {
	}
}
