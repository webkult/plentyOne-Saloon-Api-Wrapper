<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get contact department
 *
 * Gets a contact department. The ID of the department must be specified.
 */
class GetContactDepartment extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/departments/{$this->departmentId}";
	}


	/**
	 * @param int $departmentId The ID of the department
	 */
	public function __construct(
		protected int $departmentId,
	) {
	}
}
