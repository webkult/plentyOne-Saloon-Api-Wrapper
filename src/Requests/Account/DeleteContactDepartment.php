<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete contact department
 *
 * Deletes a contact department. The ID of the department must be specified.
 */
class DeleteContactDepartment extends Request
{
	protected Method $method = Method::DELETE;


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
