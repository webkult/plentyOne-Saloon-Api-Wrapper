<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Ticket\CreateMessage;
use PlentyOne\Api\Requests\Ticket\CreateTicket;
use PlentyOne\Api\Requests\Ticket\GetTicket;
use PlentyOne\Api\Requests\Ticket\ListStatusNames;
use PlentyOne\Api\Requests\Ticket\ListStatusNamesWithTypeId;
use PlentyOne\Api\Requests\Ticket\ListTicketsByFilters;
use PlentyOne\Api\Requests\Ticket\ListTypeNames;
use PlentyOne\Api\Requests\Ticket\UpdateTicket;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Ticket extends BaseResource
{
	/**
	 * @param int $id Filter that restricts the search result to tickets of a specific ticket ID
	 * @param int $typeId Filter that restricts the search result to tickets of specific ticket types
	 * @param int $priorityId Filter that restricts the search result to tickets of a specific ticket priority ID
	 * @param int $parentTicketId Filter that restricts the search result to tickets with a specified parent ticket ID
	 * @param int $statusId Filter that restricts the search result to tickets with a specified status ID
	 * @param int $confidential Filter that restricts the search result to tickets of a specific confidential value
	 * @param int $contactId Filter that restricts the search result to tickets with a specified contact ID
	 * @param int $deadlineAt Filter that restricts the search result to tickets with a specified deadline. Valid date formats are 'yyyy-mm-dd hh-mm-ss' or 'yyyy-mm-dd'.
	 * @param int $title Filter that restricts the search result to tickets with a specified phrase in title
	 * @param int $progress Filter that restricts the search result to tickets with a specified progress in percent
	 * @param int $plentyId Filter that restricts the search result to tickets with a specified client (store) ID
	 * @param int $source Filter that restricts the search result to tickets with a specific source value
	 * @param int $statusGroupId Filter that restricts the search result to tickets with a specified status group ID
	 * @param int $roleId Filter that restricts the search result to tickets with a specified role ID
	 * @param int $ownerId Filter that restricts the search result to tickets with a specified owner ID
	 * @param int $fulltext Filter that restricts the search result to tickets with full-text search. The search includes id, typeId, priorityId, title, source and the contact's firstName and lastName.
	 * @param int $customerClassId Filter that restricts the search result to tickets with a specified customer class ID
	 * @param int $resubmissionAt Filter that restricts the search result to tickets with a specified resubmission date. Valid date formats are 'yyyy-mm-dd hh-mm-ss' or 'yyyy-mm-dd'.
	 */
	public function listTicketsByFilters(
		?int $id = null,
		?int $typeId = null,
		?int $priorityId = null,
		?int $parentTicketId = null,
		?int $statusId = null,
		?int $confidential = null,
		?int $contactId = null,
		?int $deadlineAt = null,
		?int $title = null,
		?int $progress = null,
		?int $plentyId = null,
		?int $source = null,
		?int $statusGroupId = null,
		?int $roleId = null,
		?int $ownerId = null,
		?int $fulltext = null,
		?int $customerClassId = null,
		?int $resubmissionAt = null,
	): Response
	{
		return $this->connector->send(new ListTicketsByFilters($id, $typeId, $priorityId, $parentTicketId, $statusId, $confidential, $contactId, $deadlineAt, $title, $progress, $plentyId, $source, $statusGroupId, $roleId, $ownerId, $fulltext, $customerClassId, $resubmissionAt));
	}


	/**
	 * @param string $typeId The ID from the status of the ticket
	 * @param string $statusId The ID from the status of the ticket
	 * @param string $title The name of the ticket
	 * @param string $plentyId The plentyId
	 * @param string $source The source of the ticket
	 * @param string $userId userId is used in owners. The owners field contains multiple owners.
	 * @param string $roleId roleId is used in owners and refers to the ticket role. The owners field contains multiple owners.
	 */
	public function createTicket(
		string $typeId,
		string $statusId,
		string $title,
		string $plentyId,
		string $source,
		string $userId,
		string $roleId,
	): Response
	{
		return $this->connector->send(new CreateTicket($typeId, $statusId, $title, $plentyId, $source, $userId, $roleId));
	}


	public function listStatusNames(): Response
	{
		return $this->connector->send(new ListStatusNames());
	}


	public function listStatusNamesWithTypeId(): Response
	{
		return $this->connector->send(new ListStatusNamesWithTypeId());
	}


	public function listTypeNames(): Response
	{
		return $this->connector->send(new ListTypeNames());
	}


	/**
	 * @param int $ticketId The ID of the ticket to be loaded.
	 * @param array $with An array with relations to be loaded with the ticket. Possible values are 'order' and 'contact'
	 */
	public function getTicket(int $ticketId, ?array $with = null): Response
	{
		return $this->connector->send(new GetTicket($ticketId, $with));
	}


	/**
	 * @param int $ticketId The ID of the ticket
	 */
	public function updateTicket(int $ticketId): Response
	{
		return $this->connector->send(new UpdateTicket($ticketId));
	}


	/**
	 * @param int $ticketId The ID of the ticket
	 */
	public function createMessage(int $ticketId): Response
	{
		return $this->connector->send(new CreateMessage($ticketId));
	}
}
