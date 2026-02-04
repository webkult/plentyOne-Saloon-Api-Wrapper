<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Upload document to contact directory
 *
 * Uploads a document to the contact directory. The ID of the contact must be specified.
 */
class UploadDocumentToContactDirectory extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/document/link";
	}


	/**
	 * @param int $contactId
	 * @param string $link The external link
	 * @param null|string $title An alternative title for the link
	 */
	public function __construct(
		protected int $contactId,
		protected string $link,
		protected ?string $title = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['link' => $this->link, 'title' => $this->title]);
	}
}
