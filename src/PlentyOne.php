<?php

namespace PlentyOne\Api;

use PlentyOne\Api\Resource\Account;
use PlentyOne\Api\Resource\Accounting;
use PlentyOne\Api\Resource\AddressDesign;
use PlentyOne\Api\Resource\AuditLog;
use PlentyOne\Api\Resource\Authentication;
use PlentyOne\Api\Resource\Authorization;
use PlentyOne\Api\Resource\Basket;
use PlentyOne\Api\Resource\Batch;
use PlentyOne\Api\Resource\Bi;
use PlentyOne\Api\Resource\Blog;
use PlentyOne\Api\Resource\Board;
use PlentyOne\Api\Resource\Boards;
use PlentyOne\Api\Resource\Catalog;
use PlentyOne\Api\Resource\Category;
use PlentyOne\Api\Resource\Cloud;
use PlentyOne\Api\Resource\Comment;
use PlentyOne\Api\Resource\Configuration;
use PlentyOne\Api\Resource\Document;
use PlentyOne\Api\Resource\ElasticSync;
use PlentyOne\Api\Resource\Export;
use PlentyOne\Api\Resource\ExportSettings;
use PlentyOne\Api\Resource\Feedback;
use PlentyOne\Api\Resource\Fulfillment;
use PlentyOne\Api\Resource\Item;
use PlentyOne\Api\Resource\LegalInformation;
use PlentyOne\Api\Resource\Listing;
use PlentyOne\Api\Resource\Log;
use PlentyOne\Api\Resource\MailTemplates;
use PlentyOne\Api\Resource\Market;
use PlentyOne\Api\Resource\Messenger;
use PlentyOne\Api\Resource\Misc;
use PlentyOne\Api\Resource\Newsletter;
use PlentyOne\Api\Resource\Order;
use PlentyOne\Api\Resource\OrderSummary;
use PlentyOne\Api\Resource\Payment;
use PlentyOne\Api\Resource\Pim;
use PlentyOne\Api\Resource\PlentyMarketplace;
use PlentyOne\Api\Resource\PluginMultilingualism;
use PlentyOne\Api\Resource\PluginSet;
use PlentyOne\Api\Resource\Plugins;
use PlentyOne\Api\Resource\Property;
use PlentyOne\Api\Resource\Returns;
use PlentyOne\Api\Resource\ShopBuilder;
use PlentyOne\Api\Resource\Stock;
use PlentyOne\Api\Resource\StockManagement;
use PlentyOne\Api\Resource\Sync;
use PlentyOne\Api\Resource\Tag;
use PlentyOne\Api\Resource\Ticket;
use PlentyOne\Api\Resource\TicketMessage;
use PlentyOne\Api\Resource\Todo;
use PlentyOne\Api\Resource\User;
use PlentyOne\Api\Resource\Warehouse;
use PlentyOne\Api\Resource\Webstore;
use PlentyOne\Api\Resource\Wizard;
use Saloon\Helpers\OAuth2\OAuthConfig;
use Saloon\Http\Connector;
use Saloon\Traits\OAuth2\AuthorizationCodeGrant;
use SensitiveParameter;

/**
 * plentymarkets REST-API
 *
 * The plentymarkets REST API expands the functionality of the plentymarkets CMS and allows access to resources, i.e. data records, via unique URI paths
 */
class PlentyOne extends Connector
{
	use AuthorizationCodeGrant;

	/**
	 * @param string $clientId
	 * @param string $clientSecret
	 * @param null|string $authorizationUrl
	 * @param null|string $tokenUrl
	 * @param null|string $refreshUrl
	 * @param null|array $scopes
	 */
	public function __construct(
		#[SensitiveParameter]
		protected string $clientId,
		#[SensitiveParameter]
		protected string $clientSecret,
		protected ?string $authorizationUrl = 'https://example.com/oauth/authorize',
		protected ?string $tokenUrl = 'https://example.com/oauth/token',
		protected ?string $refreshUrl = null,
		protected ?array $scopes = [],
	) {
	}


	public function resolveBaseUrl(): string
	{
		return "https://example.com/";
	}


	public function defaultOauthConfig(): OAuthConfig
	{
		return OAuthConfig::make()
		->setClientId($this->clientId)
		->setClientSecret($this->clientSecret)
		->setDefaultScopes($this->scopes)
		->setAuthorizeEndpoint($this->authorizationUrl)
		->setTokenEndpoint($this->tokenUrl);
	}


	public function account(): Account
	{
		return new Account($this);
	}


	public function accounting(): Accounting
	{
		return new Accounting($this);
	}


	public function addressDesign(): AddressDesign
	{
		return new AddressDesign($this);
	}


	public function auditLog(): AuditLog
	{
		return new AuditLog($this);
	}


	public function authentication(): Authentication
	{
		return new Authentication($this);
	}


	public function authorization(): Authorization
	{
		return new Authorization($this);
	}


	public function basket(): Basket
	{
		return new Basket($this);
	}


	public function batch(): Batch
	{
		return new Batch($this);
	}


	public function bi(): Bi
	{
		return new Bi($this);
	}


	public function blog(): Blog
	{
		return new Blog($this);
	}


	public function board(): Board
	{
		return new Board($this);
	}


	public function boards(): Boards
	{
		return new Boards($this);
	}


	public function catalog(): Catalog
	{
		return new Catalog($this);
	}


	public function category(): Category
	{
		return new Category($this);
	}


	public function cloud(): Cloud
	{
		return new Cloud($this);
	}


	public function comment(): Comment
	{
		return new Comment($this);
	}


	public function configuration(): Configuration
	{
		return new Configuration($this);
	}


	public function document(): Document
	{
		return new Document($this);
	}


	public function elasticSync(): ElasticSync
	{
		return new ElasticSync($this);
	}


	public function export(): Export
	{
		return new Export($this);
	}


	public function exportSettings(): ExportSettings
	{
		return new ExportSettings($this);
	}


	public function feedback(): Feedback
	{
		return new Feedback($this);
	}


	public function fulfillment(): Fulfillment
	{
		return new Fulfillment($this);
	}


	public function item(): Item
	{
		return new Item($this);
	}


	public function legalInformation(): LegalInformation
	{
		return new LegalInformation($this);
	}


	public function listing(): Listing
	{
		return new Listing($this);
	}


	public function log(): Log
	{
		return new Log($this);
	}


	public function mailTemplates(): MailTemplates
	{
		return new MailTemplates($this);
	}


	public function market(): Market
	{
		return new Market($this);
	}


	public function messenger(): Messenger
	{
		return new Messenger($this);
	}


	public function misc(): Misc
	{
		return new Misc($this);
	}


	public function newsletter(): Newsletter
	{
		return new Newsletter($this);
	}


	public function order(): Order
	{
		return new Order($this);
	}


	public function orderSummary(): OrderSummary
	{
		return new OrderSummary($this);
	}


	public function payment(): Payment
	{
		return new Payment($this);
	}


	public function pim(): Pim
	{
		return new Pim($this);
	}


	public function plentyMarketplace(): PlentyMarketplace
	{
		return new PlentyMarketplace($this);
	}


	public function pluginMultilingualism(): PluginMultilingualism
	{
		return new PluginMultilingualism($this);
	}


	public function pluginSet(): PluginSet
	{
		return new PluginSet($this);
	}


	public function plugins(): Plugins
	{
		return new Plugins($this);
	}


	public function property(): Property
	{
		return new Property($this);
	}


	public function returns(): Returns
	{
		return new Returns($this);
	}


	public function shopBuilder(): ShopBuilder
	{
		return new ShopBuilder($this);
	}


	public function stock(): Stock
	{
		return new Stock($this);
	}


	public function stockManagement(): StockManagement
	{
		return new StockManagement($this);
	}


	public function sync(): Sync
	{
		return new Sync($this);
	}


	public function tag(): Tag
	{
		return new Tag($this);
	}


	public function ticket(): Ticket
	{
		return new Ticket($this);
	}


	public function ticketMessage(): TicketMessage
	{
		return new TicketMessage($this);
	}


	public function todo(): Todo
	{
		return new Todo($this);
	}


	public function user(): User
	{
		return new User($this);
	}


	public function warehouse(): Warehouse
	{
		return new Warehouse($this);
	}


	public function webstore(): Webstore
	{
		return new Webstore($this);
	}


	public function wizard(): Wizard
	{
		return new Wizard($this);
	}
}
