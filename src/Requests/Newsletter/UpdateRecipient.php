<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update recipient
 *
 * Updates a recipient that is assigned to a folder. The ID of the recipient must be specified.
 */
class UpdateRecipient extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/recipients/{$this->recipientId}";
	}


	/**
	 * @param int $recipientId The ID of the recipient
	 * @param null|string $email The email address of the newsletter recipient
	 * @param null|string $firstName The first name of the newsletter recipient
	 * @param null|string $lastName The last name of the newsletter recipient
	 * @param null|array $folderIds DEPRECATED: The IDs of the newsletter folders. These folders were selected by the customer in the online store in order to receive newsletters included in these folders.
	 * @param null|int $folderId The ID of the newsletter folder.
	 * @param null|string $ipAddress The IP address from where the customer has confirmed the newsletter
	 * @param null|string $birthday The customer birthday as Date string (e.g. '1982-11-24', '1982/11/24' or '24.11.1982')
	 * @param null|string $gender The gender of the customer, one of the following values: 'm','f','d'.
	 */
	public function __construct(
		protected int $recipientId,
		protected ?string $email = null,
		protected ?string $firstName = null,
		protected ?string $lastName = null,
		protected ?array $folderIds = null,
		protected ?int $folderId = null,
		protected ?string $ipAddress = null,
		protected ?string $birthday = null,
		protected ?string $gender = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'email' => $this->email,
			'firstName' => $this->firstName,
			'lastName' => $this->lastName,
			'folderIds' => $this->folderIds,
			'folderId' => $this->folderId,
			'ipAddress' => $this->ipAddress,
			'birthday' => $this->birthday,
			'gender' => $this->gender,
		]);
	}
}
