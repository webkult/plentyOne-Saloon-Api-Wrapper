<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the URL for a layout document
 *
 * Gets the URL of a layout document. The storage key must be specified. The returned URL expires after
 * 10 minutes.
 */
class GetTheUrlForLayoutDocument extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/layout/object-url";
	}


	/**
	 * @param string $key The storage key for the layout document to retrieve the URL for. Include the storage key in the request in a <code>key</code> field.
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
