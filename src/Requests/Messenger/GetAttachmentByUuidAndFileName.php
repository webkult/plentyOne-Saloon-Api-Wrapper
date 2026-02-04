<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get attachment by UUID and file name
 *
 * Gets an attachment. The UUID of the message and the file name must be specified.
 */
class GetAttachmentByUuidAndFileName extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/messages/{$this->uuid5}/attachments";
	}


	/**
	 * @param string $uuid5 The UUID of the message
	 * @param string $filename The file name of the attachment
	 */
	public function __construct(
		protected string $uuid5,
		protected string $filename,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['filename' => $this->filename]);
	}
}
