<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PostingAccounts extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $locationId = null,
		public ?string $type = null,
		public ?int $position = null,
		public ?string $subtype = null,
		public ?string $name = null,
		public ?string $account = null,
	) {
	}
}
