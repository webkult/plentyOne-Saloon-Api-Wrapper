<?php

declare(strict_types=1);

use PlentyOne\Api\PlentyOne;
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

it('resolves base url', function (): void {
    $connector = new PlentyOne('client-id', 'client-secret');
    expect($connector->resolveBaseUrl())->toBe('https://example.com/');
});

it('returns oauth config with client credentials', function (): void {
    $connector = new PlentyOne('client-id', 'client-secret');
    $config = $connector->defaultOauthConfig();
    expect($config)->toBeInstanceOf(OAuthConfig::class);
});

it('exposes each resource with correct type', function (string $method, string $resourceClass): void {
    $connector = new PlentyOne('client-id', 'client-secret');
    $resource = $connector->{$method}();
    expect($resource)->toBeInstanceOf($resourceClass);
})->with([
    ['account', Account::class],
    ['accounting', Accounting::class],
    ['addressDesign', AddressDesign::class],
    ['auditLog', AuditLog::class],
    ['authentication', Authentication::class],
    ['authorization', Authorization::class],
    ['basket', Basket::class],
    ['batch', Batch::class],
    ['bi', Bi::class],
    ['blog', Blog::class],
    ['board', Board::class],
    ['boards', Boards::class],
    ['catalog', Catalog::class],
    ['category', Category::class],
    ['cloud', Cloud::class],
    ['comment', Comment::class],
    ['configuration', Configuration::class],
    ['document', Document::class],
    ['elasticSync', ElasticSync::class],
    ['export', Export::class],
    ['exportSettings', ExportSettings::class],
    ['feedback', Feedback::class],
    ['fulfillment', Fulfillment::class],
    ['item', Item::class],
    ['legalInformation', LegalInformation::class],
    ['listing', Listing::class],
    ['log', Log::class],
    ['mailTemplates', MailTemplates::class],
    ['market', Market::class],
    ['messenger', Messenger::class],
    ['misc', Misc::class],
    ['newsletter', Newsletter::class],
    ['order', Order::class],
    ['orderSummary', OrderSummary::class],
    ['payment', Payment::class],
    ['pim', Pim::class],
    ['plentyMarketplace', PlentyMarketplace::class],
    ['pluginMultilingualism', PluginMultilingualism::class],
    ['pluginSet', PluginSet::class],
    ['plugins', Plugins::class],
    ['property', Property::class],
    ['returns', Returns::class],
    ['shopBuilder', ShopBuilder::class],
    ['stock', Stock::class],
    ['stockManagement', StockManagement::class],
    ['sync', Sync::class],
    ['tag', Tag::class],
    ['ticket', Ticket::class],
    ['ticketMessage', TicketMessage::class],
    ['todo', Todo::class],
    ['user', User::class],
    ['warehouse', Warehouse::class],
    ['webstore', Webstore::class],
    ['wizard', Wizard::class],
]);
