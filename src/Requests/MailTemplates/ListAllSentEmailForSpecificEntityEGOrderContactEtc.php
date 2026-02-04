<?php

namespace PlentyOne\Api\Requests\MailTemplates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all sent email for a specific entity (e.g order, contact, etc.)
 *
 * List all sent email for a specific entity (e.g order, contact, etc.)
 */
class ListAllSentEmailForSpecificEntityEGOrderContactEtc extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/mail_templates/email_service/history";
	}


	/**
	 * @param string $type History type: of order or contact
	 * @param int $id Search for a specific template
	 */
	public function __construct(
		protected string $type,
		protected int $id,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['type' => $this->type, 'id' => $this->id]);
	}
}
