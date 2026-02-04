<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List message stream of a certain message (excluding message with UUID5)
 *
 * Lists the stream of messages of a certain message (excluding the message with the given UUID5).
 */
class ListMessageStreamOfCertainMessageExcludingMessageWithUuid5 extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/messages";
	}


	/**
	 * @param null|string $uuid The reference UUID5 of the message to start from (excluding).
	 * @param null|bool $successors If set to FALSE, the messages older than the referenced message will be returned.
	 * @param null|int $amount The number of messages to be listed (defaults to 50)
	 */
	public function __construct(
		protected ?string $uuid = null,
		protected ?bool $successors = null,
		protected ?int $amount = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['uuid' => $this->uuid, 'successors' => $this->successors, 'amount' => $this->amount]);
	}
}
