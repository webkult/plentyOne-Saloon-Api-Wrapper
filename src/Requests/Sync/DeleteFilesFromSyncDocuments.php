<?php

namespace PlentyOne\Api\Requests\Sync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete files from sync documents
 *
 * Deletes files from sync documents
 */
class DeleteFilesFromSyncDocuments extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/documents";
	}


	/**
	 * @param array $keyList List of storage keys to delete
	 */
	public function __construct(
		protected array $keyList,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['keyList' => $this->keyList]);
	}
}
