<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class Recipient extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $folderId = null,
		public ?int $contactId = null,
		public ?string $firstName = null,
		public ?string $lastName = null,
		public ?string $email = null,
		public ?string $gender = null,
		public ?string $birthday = null,
		public ?int $timestamp = null,
		public ?string $templateLang = null,
		public ?int $confirmedTimestamp = null,
		public ?string $confirmAuthString = null,
		#[MapName('confirmationURL')]
		public ?string $confirmationUrl = null,
	) {
	}
}
