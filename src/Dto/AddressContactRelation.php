<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AddressContactRelation extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $contactId = null,
		public ?int $typeId = null,
		public ?int $addressId = null,
		public ?bool $isPrimary = null,
	) {
	}
}
