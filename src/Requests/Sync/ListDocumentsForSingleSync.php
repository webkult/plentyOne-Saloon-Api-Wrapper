<?php

namespace PlentyOne\Api\Requests\Sync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List documents for a single sync
 *
 * Lists documents for a single sync
 */
class ListDocumentsForSingleSync extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/documents";
	}


	/**
	 * @param null|string $continuationToken token from previous request to continue listing documents
	 */
	public function __construct(
		protected ?string $continuationToken = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['continuationToken' => $this->continuationToken]);
	}
}
