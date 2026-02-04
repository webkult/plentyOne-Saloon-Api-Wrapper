<?php

namespace PlentyOne\Api\Requests\Ticket;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List tickets by filters
 *
 * Lists the tickets by filters.
 */
class ListTicketsByFilters extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/tickets";
	}


	/**
	 * @param null|int $id Filter that restricts the search result to tickets of a specific ticket ID
	 * @param null|int $typeId Filter that restricts the search result to tickets of specific ticket types
	 * @param null|int $priorityId Filter that restricts the search result to tickets of a specific ticket priority ID
	 * @param null|int $parentTicketId Filter that restricts the search result to tickets with a specified parent ticket ID
	 * @param null|int $statusId Filter that restricts the search result to tickets with a specified status ID
	 * @param null|int $confidential Filter that restricts the search result to tickets of a specific confidential value
	 * @param null|int $contactId Filter that restricts the search result to tickets with a specified contact ID
	 * @param null|int $deadlineAt Filter that restricts the search result to tickets with a specified deadline. Valid date formats are 'yyyy-mm-dd hh-mm-ss' or 'yyyy-mm-dd'.
	 * @param null|int $title Filter that restricts the search result to tickets with a specified phrase in title
	 * @param null|int $progress Filter that restricts the search result to tickets with a specified progress in percent
	 * @param null|int $plentyId Filter that restricts the search result to tickets with a specified client (store) ID
	 * @param null|int $source Filter that restricts the search result to tickets with a specific source value
	 * @param null|int $statusGroupId Filter that restricts the search result to tickets with a specified status group ID
	 * @param null|int $roleId Filter that restricts the search result to tickets with a specified role ID
	 * @param null|int $ownerId Filter that restricts the search result to tickets with a specified owner ID
	 * @param null|int $fulltext Filter that restricts the search result to tickets with full-text search. The search includes id, typeId, priorityId, title, source and the contact's firstName and lastName.
	 * @param null|int $customerClassId Filter that restricts the search result to tickets with a specified customer class ID
	 * @param null|int $resubmissionAt Filter that restricts the search result to tickets with a specified resubmission date. Valid date formats are 'yyyy-mm-dd hh-mm-ss' or 'yyyy-mm-dd'.
	 */
	public function __construct(
		protected ?int $id = null,
		protected ?int $typeId = null,
		protected ?int $priorityId = null,
		protected ?int $parentTicketId = null,
		protected ?int $statusId = null,
		protected ?int $confidential = null,
		protected ?int $contactId = null,
		protected ?int $deadlineAt = null,
		protected ?int $title = null,
		protected ?int $progress = null,
		protected ?int $plentyId = null,
		protected ?int $source = null,
		protected ?int $statusGroupId = null,
		protected ?int $roleId = null,
		protected ?int $ownerId = null,
		protected ?int $fulltext = null,
		protected ?int $customerClassId = null,
		protected ?int $resubmissionAt = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'id' => $this->id,
			'typeId' => $this->typeId,
			'priorityId' => $this->priorityId,
			'parentTicketId' => $this->parentTicketId,
			'statusId' => $this->statusId,
			'confidential' => $this->confidential,
			'contactId' => $this->contactId,
			'deadlineAt' => $this->deadlineAt,
			'title' => $this->title,
			'progress' => $this->progress,
			'plentyId' => $this->plentyId,
			'source' => $this->source,
			'statusGroupId' => $this->statusGroupId,
			'roleId' => $this->roleId,
			'ownerId' => $this->ownerId,
			'fulltext' => $this->fulltext,
			'customerClassId' => $this->customerClassId,
			'resubmissionAt' => $this->resubmissionAt,
		]);
	}
}
