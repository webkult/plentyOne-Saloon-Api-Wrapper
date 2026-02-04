<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update entry
 *
 * Updates an entry. The ID of the entry must be specified.
 */
class UpdateEntry extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/{$this->entryId}";
	}


	/**
	 * @param int $entryId The ID of the entry
	 * @param null|string $subject The subject of the entry
	 * @param null|string $body The body of the entry
	 * @param null|string $kind The type of the entry. The content can be saved as plain text or in HTML format. Possible values: ['plain', 'html'].
	 * @param int $folderId The ID of the newsletter folder
	 */
	public function __construct(
		protected int $entryId,
		protected ?string $subject = null,
		protected ?string $body = null,
		protected ?string $kind = null,
		protected int $folderId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['subject' => $this->subject, 'body' => $this->body, 'kind' => $this->kind, 'folderId' => $this->folderId]);
	}
}
