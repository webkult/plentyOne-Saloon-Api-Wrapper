<?php

namespace PlentyOne\Api\Requests\Sync;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Upload a document to sync directory
 *
 * Uploads a document to sync directory
 */
class UploadDocumentToSyncDirectory extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/document";
	}


	/**
	 * @param string $key The storage key for the file to upload
	 */
	public function __construct(
		protected string $key,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['key' => $this->key]);
	}
}
