<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Searches for entities that can be linked to a conversation
 *
 * Searches for entities that can be linked to a conversation. It will search for contacts (ID and full
 * text), orders (ID) and users (name, email and ID)
 */
class SearchesForEntitiesThatCanBeLinkedToConversation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/searchReceiver";
	}


	/**
	 * @param string $searchTerm The searched value. Expected values: John Doe/ 123 / john@plentymarkets.com
	 */
	public function __construct(
		protected string $searchTerm,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['searchTerm' => $this->searchTerm]);
	}
}
