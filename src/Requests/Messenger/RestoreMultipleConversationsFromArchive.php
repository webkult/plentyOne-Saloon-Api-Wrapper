<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Restore multiple conversations from archive
 *
 * Restore multiple conversations from archive
 */
class RestoreMultipleConversationsFromArchive extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/archiveRestore";
	}


	/**
	 * @param array $uuids The list of conversations UUID's to restore from archive. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function __construct(
		protected array $uuids,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['uuids' => $this->uuids]);
	}
}
