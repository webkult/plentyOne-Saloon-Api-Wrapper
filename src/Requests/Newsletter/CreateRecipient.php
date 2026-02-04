<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create recipient
 *
 * Creates a recipient.
 */
class CreateRecipient extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/recipients";
	}


	/**
	 * @param null|string $email The email address of the recipient
	 * @param null|string $firstName The first name of the recipient
	 * @param null|string $lastName The last name of the recipient
	 * @param null|array $folderIds The IDs of the newsletter folders. These folders were selected by the customer in the online store in order to receive newsletters included in these folders.
	 * @param null|bool $isFrontend Value that indicates if the REST call was retrieved from the front end. Possible values are: 'true' or 'false'. True = The REST call was retrieved from the front end. False = The REST call was not retrieved from the front end.
	 * @param null|bool $ignoreVisibility Value that indicates if the REST call considers folders without visibility. Possible value: 'true'. If the value 'true' is set, the folder visibility will be ignored. This means that both visible and invisible folders will be listed depending on the folder IDs entered in the REST call.
	 * @param null|string $ipAddress The IP address from where the customer has confirmed the newsletter
	 */
	public function __construct(
		protected ?string $email = null,
		protected ?string $firstName = null,
		protected ?string $lastName = null,
		protected ?array $folderIds = null,
		protected ?bool $isFrontend = null,
		protected ?bool $ignoreVisibility = null,
		protected ?string $ipAddress = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'email' => $this->email,
			'firstName' => $this->firstName,
			'lastName' => $this->lastName,
			'folderIds' => $this->folderIds,
			'isFrontend' => $this->isFrontend,
			'ignoreVisibility' => $this->ignoreVisibility,
			'ipAddress' => $this->ipAddress,
		]);
	}
}
