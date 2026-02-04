<?php

namespace PlentyOne\Api\Requests\MailTemplates;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Renders a template and sends an email to the specified recipients
 *
 * Renders a template and sends an email to the specified recipients
 */
class RendersTemplateAndSendsEmailToTheSpecifiedRecipients extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/mail_templates/email_service/sendEmail/{$this->templateId}";
	}


	/**
	 * @param int $templateId Template id that will be sent
	 * @param null|string $conversationId Conversation id
	 * @param null|array $contacts List of contacts ids
	 * @param null|array $orders List of orders ids
	 * @param null|array $emails List of emails
	 * @param null|string $lang Language of template
	 * @param null|int $receiver Reveceiver for email: DEFAULT = 0, CONTACT = 1,
	 *      *     INVOICE_ADDRESS = 2, DELIVERY_ADDRESS = 3, WAREHOUSE = 4, CONTACT_EMAIL_PRIVATE = 5, CONTACT_EMAIL_WORK = 6,
	 *      *     CONTACT_EMAIL_PAYPAL = 7,
	 */
	public function __construct(
		protected int $templateId,
		protected ?string $conversationId = null,
		protected ?array $contacts = null,
		protected ?array $orders = null,
		protected ?array $emails = null,
		protected ?string $lang = null,
		protected ?int $receiver = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'conversationId' => $this->conversationId,
			'contacts' => $this->contacts,
			'orders' => $this->orders,
			'emails' => $this->emails,
			'lang' => $this->lang,
			'receiver' => $this->receiver,
		]);
	}
}
