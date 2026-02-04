<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Set or unset doneAt date of message
 *
 * Sets or unsets the doneAt date of the message. The UUID {uuid5} must be specified.
 */
class SetOrUnsetDoneAtDateOfMessage extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/messages/{$this->uuid5}/done";
	}


	/**
	 * @param string $uuid5 The UUID5 of the message
	 * @param null|string $doneAt Set (or unset, if doneAt is not given) the doneAt date in the message.
	 */
	public function __construct(
		protected string $uuid5,
		protected ?string $doneAt = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['doneAt' => $this->doneAt]);
	}
}
