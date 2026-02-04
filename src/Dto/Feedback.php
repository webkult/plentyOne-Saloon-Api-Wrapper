<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Feedback extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $title = null,
		public ?string $authorName = null,
		public ?bool $isVisible = null,
	) {
	}
}
