<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class Contact extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $externalId = null,
		public ?string $number = null,
		public ?int $typeId = null,
		public ?string $firstName = null,
		public ?string $lastName = null,
		public ?string $fullName = null,
		public ?string $email = null,
		public ?string $secondaryEmail = null,
		public ?string $gender = null,
		public ?string $title = null,
		public ?string $formOfAddress = null,
		public ?string $newsletterAllowanceAt = null,
		public ?int $classId = null,
		public ?int $blocked = null,
		public ?int $rating = null,
		public ?string $bookAccount = null,
		public ?string $lang = null,
		public int|float|null $referrerId = null,
		public ?int $plentyId = null,
		public ?int $userId = null,
		public ?string $birthdayAt = null,
		public ?string $lastLoginAt = null,
		public ?string $lastLoginAtTimestamp = null,
		public ?string $lastOrderAt = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?string $privatePhone = null,
		public ?string $privateFax = null,
		public ?string $privateMobile = null,
		public ?string $ebayName = null,
		public ?string $paypalEmail = null,
		public ?string $paypalPayerId = null,
		public ?string $klarnaPersonalId = null,
		public ?string $dhlPostIdent = null,
		public ?string $forumUsername = null,
		public ?string $forumGroupId = null,
		public ?string $singleAccess = null,
		public ?string $contactPerson = null,
		public ?string $marketplacePartner = null,
		public ?int $valuta = null,
		public ?int $discountDays = null,
		public int|float|null $discountPercent = null,
		public ?int $timeForPaymentAllowedDays = null,
		public ?int $salesRepresentativeContactId = null,
		public ?string $anonymizeAt = null,
		public ?bool $isLead = null,
		public ?string $leadStatusKey = null,
		public ?int $inLeadStatusSince = null,
		public ?string $leadStatusUpdateAt = null,
		#[MapName('position_id')]
		public ?int $positionId = null,
	) {
	}
}
