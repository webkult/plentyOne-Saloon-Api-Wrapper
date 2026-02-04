<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the content of a file from the inbox
 *
 * Gets the content of a file stored in the inbox. The storage key (i.e. file path) must be specified.
 */
class GetTheContentOfFileFromTheInbox extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/plugins/inbox/object-url";
	}


	/**
	 * @param null|string $key The storage key for the file to retrieve. Include the storage key in the request in a <code>key</code> field.
	 */
	public function __construct(
		protected ?string $key = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['key' => $this->key]);
	}
}
