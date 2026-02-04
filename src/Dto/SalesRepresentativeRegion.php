<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SalesRepresentativeRegion extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $accountContactRelationId = null,
		public ?string $postalCodeArea = null,
		public ?int $countryId = null,
	) {
	}
}
