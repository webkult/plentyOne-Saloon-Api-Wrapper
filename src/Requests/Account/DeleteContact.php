<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete contact
 *
 * Deletes a contact. The ID of the contact must be specified.
 */
class DeleteContact extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}";
	}


	/**
	 * @param int $contactId The ID of the contact
	 * @param null|bool $checkExistingOrders Flag that checks if the contact is linked to orders.
	 *      * If the contact is linked to orders, CustomerDeleteException is thrown
	 *      * and the contact will not be deleted.
	 */
	public function __construct(
		protected int $contactId,
		protected ?bool $checkExistingOrders = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['checkExistingOrders' => $this->checkExistingOrders]);
	}
}
