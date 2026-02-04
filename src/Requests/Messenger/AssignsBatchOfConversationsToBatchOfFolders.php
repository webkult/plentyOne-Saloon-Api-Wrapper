<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Assigns a batch of conversations to a batch of folders
 *
 * Assigns a batch of conversations to a batch of folders
 */
class AssignsBatchOfConversationsToBatchOfFolders extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/folders";
	}


	/**
	 * @param int $foldersUuids The list of folders to be assigned to. Expected format: ['78656f7d-02fd-5461-9e54-13b2668f9b43']
	 * @param array $conversationsUuids The list of conversations UUID's to assign to folders. Expected values: ['24810ce7-4b75-45d0-8610-7fb07ede0d86']
	 */
	public function __construct(
		protected int $foldersUuids,
		protected array $conversationsUuids,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['foldersUuids' => $this->foldersUuids, 'conversationsUuids' => $this->conversationsUuids]);
	}
}
