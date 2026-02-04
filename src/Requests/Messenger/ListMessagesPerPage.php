<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List messages per page
 *
 * Lists the number of messages per page.
 */
class ListMessagesPerPage extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/messages/get";
	}


	/**
	 * @param null|int $page The number of the returned page of messages. The default value is 1 (the first).
	 * @param null|int $itemsPerPage The number of messages to be listed (defaults to 50).
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'itemsPerPage' => $this->itemsPerPage]);
	}
}
