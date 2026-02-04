<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List layout documents
 *
 * Lists up to 1000 layout documents per request. If more than 1000 layout documents are available,
 * a
 * <code>nextContinuationToken</code> is returned. Use this token to get the next (up to) 1000 layout
 * documents.
 * Use the same request and include a field with the key <code>continuationToken</code> as
 * well as the returned
 * token from the previous call as the value.
 *
 * Check the <code>isTruncated</code>
 * field in the response to see if more results are available. If <code>isTruncated</code> is
 * true,
 * repeat the request using the token from the <code>nextContinuationToken</code> field of the
 * previous response to get all
 * results.
 */
class ListLayoutDocuments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/layout/list";
	}


	/**
	 * @param null|string $continuationToken Token for listing the next (up to) 1000 layout documents.
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
