<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update contact department
 *
 * Updates a contact department. The ID of the department must be specified.
 */
class UpdateContactDepartment extends Request
{
	protected Method $method = Method::PUT;


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
