<?php

namespace PlentyOne\Api\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List order documents
 *
 * Lists all order regardless of type.
 */
class ListOrderDocuments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/documents";
	}


	/**
	 * @param null|int $contactId Filter that restricts the search results to documents belonging to a specific contact ID.
	 * @param null|int $plentyId Filter that restricts the search results to documents belonging to the specific plenty ID.
	 * @param null|string $createdAtFrom Filter that restricts the search result to documents that were created on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $createdAtTo Filter that restricts the search result to documents that were created within a certain period of time. This filter can be used alone or can be combined with the CreatedAtFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $displayDateFrom Filter that restricts the search result to documents that were displayed on the specified date. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param null|string $displayDateTo Filter that restricts the search result to documents that were displayed within a certain period of time. This filter can be used alone or can be combined with the displayDateFrom filter. The date has to be in the W3C format, e.g. '2016-10-24T13:33:23+02:00'.
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The items per page to search for
	 * @param null|array $with Load additional relations for a document. Currently possible are:
	 *     <ul>
	 *     <li>'references' = The document reference objects that are associated with the document.</li>
	 *     </ul>
	 *     Example: <code>?with[]=references</code>
	 */
	public function __construct(
		protected ?int $contactId = null,
		protected ?int $plentyId = null,
		protected ?string $createdAtFrom = null,
		protected ?string $createdAtTo = null,
		protected ?string $displayDateFrom = null,
		protected ?string $displayDateTo = null,
		protected int $page,
		protected int $itemsPerPage,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'contactId' => $this->contactId,
			'plentyId' => $this->plentyId,
			'createdAtFrom' => $this->createdAtFrom,
			'createdAtTo' => $this->createdAtTo,
			'displayDateFrom' => $this->displayDateFrom,
			'displayDateTo' => $this->displayDateTo,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'with' => $this->with,
		]);
	}
}
