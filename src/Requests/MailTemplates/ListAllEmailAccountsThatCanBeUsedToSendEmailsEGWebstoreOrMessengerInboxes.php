<?php

namespace PlentyOne\Api\Requests\MailTemplates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all email accounts that can be used to send emails (e.g. Webstore or Messenger inboxes)
 *
 * List all email accounts that can be used to send emails (e.g. Webstore or Messenger inboxes)
 */
class ListAllEmailAccountsThatCanBeUsedToSendEmailsEGWebstoreOrMessengerInboxes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/mail_templates/email_service/accounts";
	}


	/**
	 * @param string $accountType Values: webstore OR messenger_inbox.
	 */
	public function __construct(
		protected string $accountType,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['accountType' => $this->accountType]);
	}
}
