<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Permanently delete a list of archived conversation
 *
 * Permanently delete a list of archived conversation. This will delete also the messages that belong
 * to that conversation
 */
class PermanentlyDeleteListOfArchivedConversation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/archiveDelete";
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
