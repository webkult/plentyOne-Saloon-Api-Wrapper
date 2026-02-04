<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete files from frontend storage.
 *
 * Deletes a list of files from frontend storage. A list of storage keys must be specified.
 */
class DeleteFilesFromFrontendStorage extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/frontend/files";
	}


	/**
	 * @param array $keyList List of storage keys for the files to be deleted.
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
