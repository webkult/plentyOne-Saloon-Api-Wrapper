<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List archived message stream of a certain conversation
 *
 * Lists the stream of archived messages of a certain conversation.
 */
class ListArchivedMessageStreamOfCertainConversation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/messages/forArchivedConversation";
	}


	/**
	 * @param string $conversationId The reference UUID5 of the conversation to start from.
	 */
	public function __construct(
		protected string $conversationId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['conversationId' => $this->conversationId]);
	}
}
