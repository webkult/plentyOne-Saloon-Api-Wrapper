<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List addresses that are linked with contacts
 *
 * Lists addresses of the contact. The ID of the contact must be specified. If you specify page and
 * itemsPerPage, you will get a paginated result. Otherwise you will get an array.
 */
class ListAddressesThatAreLinkedWithContacts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/{$this->contactId}/addresses/{$this->addressTypeId}";
	}


	/**
	 * @param int $contactId
	 * @param int $addressTypeId
	 * @param null|int $page The requested page. The default page that will be returned is page 1.
	 * @param null|int $itemsPerPage The number of addresses to list per page. The default number is 1000.
	 */
	public function __construct(
		protected int $contactId,
		protected int $addressTypeId,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'itemsPerPage' => $this->itemsPerPage]);
	}
}
