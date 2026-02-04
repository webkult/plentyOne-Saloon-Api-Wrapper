<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List recipients
 *
 * Lists recipients from all newsletter folders.
 */
class ListRecipients extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/list_recipients";
	}


	/**
	 * @param null|array $columns Filter that restricts the search result to specific columns
	 * @param null|int $page The page to get. The default page that will be returned is page 1.
	 * @param null|int $itemsPerPage The number of orders to be displayed per page. The default number of orders per page is 50.
	 * @param null|int $folderId Filter that restricts the search result to a specific folderId.
	 * @param null|bool $isConfirmed Filter that restricts the search result to confirmed recipients.
	 * @param null|array $with Load additional relations for a Recipient. CURRENTLY NOT AVAILABLE
	 * @param int $recipientId The ID of the recipient
	 */
	public function __construct(
		protected ?array $columns = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?int $folderId = null,
		protected ?bool $isConfirmed = null,
		protected ?array $with = null,
		protected int $recipientId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'columns' => $this->columns,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'folderId' => $this->folderId,
			'isConfirmed' => $this->isConfirmed,
			'with' => $this->with,
			'recipientId' => $this->recipientId,
		]);
	}
}
