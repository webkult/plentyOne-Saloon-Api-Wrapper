<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Address extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $gender = null,
		public ?string $name1 = null,
		public ?string $name2 = null,
		public ?string $name3 = null,
		public ?string $name4 = null,
		public ?string $address1 = null,
		public ?string $address2 = null,
		public ?string $address3 = null,
		public ?string $address4 = null,
		public ?string $postalCode = null,
		public ?string $town = null,
		public ?int $countryId = null,
		public ?int $stateId = null,
		public ?bool $readOnly = null,
		public ?string $companyName = null,
		public ?string $firstName = null,
		public ?string $lastName = null,
		public ?string $careOf = null,
		public ?string $street = null,
		public ?string $houseNumber = null,
		public ?string $additional = null,
		public ?string $checkedAt = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?string $taxIdNumber = null,
		public ?string $externalId = null,
		public ?bool $entryCertificate = null,
		public ?string $phone = null,
		public ?string $email = null,
		public ?string $postident = null,
		public ?string $personalNumber = null,
		public ?string $fsk = null,
		public ?string $birthday = null,
		public ?string $title = null,
		public ?string $sessionId = null,
		public ?string $contactPerson = null,
		public ?string $externalCustomerId = null,
		public ?string $packstationNo = null,
		public ?bool $isPackstation = null,
		public ?bool $isPostfiliale = null,
	) {
	}
}
