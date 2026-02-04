<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the URL for a order property file
 *
 * Gets the URL of a order property file. The storage key must be specified. The returned URL expires
 * after 10
 * minutes.
 */
class GetTheUrlForOrderPropertyFile extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/order-properties/object-url";
	}


	/**
	 * @param string $key The storage key for the order property
	 *      *                        file to retrieve the URL for. Include the storage key in the request in a
	 *      *                        <code>key</code> field.
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
