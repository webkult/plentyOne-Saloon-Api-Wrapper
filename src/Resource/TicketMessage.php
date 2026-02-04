<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\TicketMessage\GetTicketMessageForGivenMessageId;
use PlentyOne\Api\Requests\TicketMessage\ListAllInternalTicketMessages;
use PlentyOne\Api\Requests\TicketMessage\ListAllPublicTicketMessages;
use PlentyOne\Api\Requests\TicketMessage\ListAllTicketMessagesForGivenTicketId;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class TicketMessage extends BaseResource
{
	/**
	 * @param int $messageId The ID of the ticket message to be returned
	 */
	public function getTicketMessageForGivenMessageId(int $messageId): Response
	{
		return $this->connector->send(new GetTicketMessageForGivenMessageId($messageId));
	}


	/**
	 * @param int $ticketId The ID of the ticket containing the messages
	 */
	public function listAllTicketMessagesForGivenTicketId(int $ticketId): Response
	{
		return $this->connector->send(new ListAllTicketMessagesForGivenTicketId($ticketId));
	}


	/**
	 * @param int $ticketId The ID of the ticket containing the messages
	 */
	public function listAllInternalTicketMessages(int $ticketId): Response
	{
		return $this->connector->send(new ListAllInternalTicketMessages($ticketId));
	}


	/**
	 * @param int $ticketId The ID of the ticket containing the messages
	 */
	public function listAllPublicTicketMessages(int $ticketId): Response
	{
		return $this->connector->send(new ListAllPublicTicketMessages($ticketId));
	}
}
