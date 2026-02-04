<?php

namespace PlentyOne\Api\Requests\Ticket;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create ticket
 *
 * Creates a ticket. The fields typeId, statusId, title, plentyId, source and owners must be specified.
 */
class CreateTicket extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/tickets";
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
	public function __construct(
		protected string $typeId,
		protected string $statusId,
		protected string $title,
		protected string $plentyId,
		protected string $source,
		protected string $userId,
		protected string $roleId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'typeId' => $this->typeId,
			'statusId' => $this->statusId,
			'title' => $this->title,
			'plentyId' => $this->plentyId,
			'source' => $this->source,
			'userId' => $this->userId,
			'roleId' => $this->roleId,
		]);
	}
}
