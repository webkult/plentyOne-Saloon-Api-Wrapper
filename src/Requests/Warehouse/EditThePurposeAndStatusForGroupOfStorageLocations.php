<?php

namespace PlentyOne\Api\Requests\Warehouse;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Edit the purpose and status for a group of storage locations
 *
 * Edits the purpose and status for a group of storage locations by passing the group storage location
 * ID (can be sent as mass assignment)
 */
class EditThePurposeAndStatusForGroupOfStorageLocations extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/warehouses/locations/group";
	}


	/**
	 * @param string $purpose The purpose key value for storage location purposeKey field
	 * @param string $status The status key value for storage location status field
	 */
	public function __construct(
		protected string $purpose,
		protected string $status,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['purpose' => $this->purpose, 'status' => $this->status]);
	}
}
