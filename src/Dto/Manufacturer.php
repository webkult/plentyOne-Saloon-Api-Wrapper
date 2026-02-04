<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Manufacturer extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?string $externalName = null,
		public ?string $logo = null,
		public ?string $url = null,
		public ?string $street = null,
		public ?string $houseNo = null,
		public ?string $postcode = null,
		public ?string $town = null,
		public ?string $phoneNumber = null,
		public ?string $faxNumber = null,
		public ?string $email = null,
		public ?int $countryId = null,
		public ?int $pixmaniaBrandId = null,
		public ?int $neckermannAtEpBrandId = null,
		public ?int $laRedouteBrandId = null,
		public ?int $position = null,
		public ?string $comment = null,
		public ?string $updatedAt = null,
		public ?string $responsibleName = null,
		public ?string $responsibleStreet = null,
		public ?string $responsibleHouseNo = null,
		public ?string $responsiblePostCode = null,
		public ?string $responsibleTown = null,
		public ?int $responsibleCountry = null,
		public ?string $responsibleEmail = null,
		public ?string $responsiblePhoneNo = null,
	) {
	}
}
