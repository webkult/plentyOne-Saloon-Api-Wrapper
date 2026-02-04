<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete files from the inbox
 *
 * Deletes a list of files from the inbox. A list of storage keys must be specified.
 */
class DeleteFilesFromTheInbox extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/plugins/inbox";
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
