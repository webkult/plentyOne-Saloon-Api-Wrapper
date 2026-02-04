<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderReferrer extends SpatieData
{
	public function __construct(
		public int|float|null $id = null,
		public ?bool $isEditable = null,
		public ?string $backendName = null,
		public ?string $name = null,
		public ?int $orderOwnerId = null,
		public ?bool $isFilterable = null,
		public ?string $origin = null,
		public ?bool $showInLeads = null,
	) {
	}
}
