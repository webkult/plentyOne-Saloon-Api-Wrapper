<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderStatus extends SpatieData
{
	public function __construct(
		public int|float|null $statusId = null,
		public ?bool $isErasable = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?bool $isFrontendVisible = null,
		public ?bool $isReorderVisible = null,
		public ?bool $isRedistributionVisible = null,
		public ?string $color = null,
	) {
	}
}
