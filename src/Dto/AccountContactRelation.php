<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AccountContactRelation extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $accountId = null,
		public ?int $contactId = null,
	) {
	}
}
