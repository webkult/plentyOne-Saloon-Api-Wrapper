<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class FeedbackRating extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $ratingValue = null,
		public ?bool $isVisible = null,
	) {
	}
}
