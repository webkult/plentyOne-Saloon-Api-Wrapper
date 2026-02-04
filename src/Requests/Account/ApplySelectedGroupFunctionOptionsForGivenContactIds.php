<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Apply selected group function options for given contact IDs
 *
 * Applies selected group function options for given contact IDs.
 */
class ApplySelectedGroupFunctionOptionsForGivenContactIds extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/group_functions";
	}


	/**
	 * @param null|array $contactList A list of contact IDs
	 * @param null|int $emailTemplate An email template ID
	 * @param null|int $newsletter A newsletter folder ID
	 * @param null|int $addressLabelTemplate An address label template ID
	 */
	public function __construct(
		protected ?array $contactList = null,
		protected ?int $emailTemplate = null,
		protected ?int $newsletter = null,
		protected ?int $addressLabelTemplate = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'contactList' => $this->contactList,
			'emailTemplate' => $this->emailTemplate,
			'newsletter' => $this->newsletter,
			'addressLabelTemplate' => $this->addressLabelTemplate,
		]);
	}
}
