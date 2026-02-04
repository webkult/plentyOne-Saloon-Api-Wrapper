<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Upload a file to the inbox
 *
 * Uploads a file to the inbox. The storage key (i.e. file path) must be specified.
 */
class UploadFileToTheInbox extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/plugins/inbox";
	}


	/**
	 * @param string $key The storage key for the file to upload. Include the storage key in the request in a <code>key</code> field.
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
