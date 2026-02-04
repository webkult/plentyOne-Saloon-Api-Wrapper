<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List recipients of folder
 *
 * Lists all recipients of a folder.
 */
class ListRecipientsOfFolder extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/recipients";
	}


	/**
	 * @param null|string $email Filter that restricts the search result to the email address of the recipient
	 * @param null|int $folderId Filter that restricts the search result to the folder ID
	 * @param null|int $recipientId Filter that restricts the search result to the recipient ID
	 */
	public function __construct(
		protected ?string $email = null,
		protected ?int $folderId = null,
		protected ?int $recipientId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['email' => $this->email, 'folderId' => $this->folderId, 'recipientId' => $this->recipientId]);
	}
}
