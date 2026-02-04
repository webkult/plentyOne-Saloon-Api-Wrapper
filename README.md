# PlentyOne Saloon API

[![Tests](https://github.com/webkult/plentyone-saloon-api/actions/workflows/tests.yml/badge.svg)](https://github.com/webkult/plentyone-saloon-api/actions/workflows/tests.yml)
[![codecov](https://codecov.io/gh/webkult/plentyone-saloon-api/graph/badge.svg)](https://codecov.io/gh/webkult/plentyone-saloon-api)

PHP-SDK für die plentymarkets/plentyOne REST-API, gebaut mit [Saloon](https://saloon.dev).

- **Vendor:** Webkult  
- **Lizenz:** CC BY-SA 4.0

## Installation

```bash
composer require webkult/plentyone-saloon-api
```

## Laravel

In Laravel wird der Connector per Auto-Discovery registriert und aus der Konfiguration befüllt.

### 1. Konfiguration veröffentlichen

```bash
php artisan vendor:publish --tag=plentyone-config
```

### 2. Umgebungsvariablen (`.env`)

```env
PLENTYONE_BASE_URL=https://dein-plentymarkets-shop.de
PLENTYONE_CLIENT_ID=deine-client-id
PLENTYONE_CLIENT_SECRET=dein-client-secret

# Optional, Standard abgeleitet von PLENTYONE_BASE_URL:
# PLENTYONE_AUTHORIZATION_URL=
# PLENTYONE_TOKEN_URL=
# PLENTYONE_REFRESH_URL=
# PLENTYONE_SCOPES=
```

### 3. Nutzung

Über Dependency Injection:

```php
use PlentyOne\Api\PlentyOne;

class OrderSync
{
    public function __construct(
        private PlentyOne $plentyOne,
    ) {}

    public function handle(): void
    {
        $response = $this->plentyOne->accounting()->listRevenueAccountConfigurations();
        // ...
    }
}
```

Oder direkt aus der App:

```php
$plentyOne = app(PlentyOne::class);
$response = $plentyOne->order()->listOrders();
```

### 4. Tests (Laravel)

Mit [saloonphp/laravel-plugin](https://docs.saloon.dev/installable-plugins/laravel-integration) kannst du Requests mocken:

```bash
composer require --dev saloonphp/laravel-plugin
```

```php
use Saloon\Http\Faking\MockResponse;
use Saloon\Laravel\Facades\Saloon;

Saloon::fake([
    ListRevenueAccountConfigurations::class => MockResponse::make(body: [...], status: 200),
]);
```

## Ohne Laravel

```php
use PlentyOne\Api\PlentyOne;

$plentyOne = new PlentyOne(
    clientId: 'deine-client-id',
    clientSecret: 'dein-client-secret',
    authorizationUrl: 'https://dein-shop.de/oauth/authorize',
    tokenUrl: 'https://dein-shop.de/oauth/token',
);

$response = $plentyOne->accounting()->listRevenueAccountConfigurations();
```

Die plentymarkets REST-API nutzt OAuth2 (Authorization Code). Token-Fluss und -Speicherung müssen in deiner Anwendung umgesetzt werden; Saloon unterstützt den Grant, die Persistenz (Session/DB) liegt bei dir.

## SDK neu generieren

Bei Änderungen an der OpenAPI-Spec:

```bash
composer run-script generate
```

Die Spec liegt unter `openapi/plentymarkets-openapi.json` (Quelle: [plentymarkets api-doc](https://github.com/plentymarkets/api-doc)).

## Tests

```bash
composer test
```

Mit Coverage (lokal mit Xdebug, PHP 8.4: `pecl install xdebug`):

```bash
composer run test:coverage
```

Dabei wird `XDEBUG_MODE=coverage` gesetzt; der Report landet in der Konsole und unter `build/coverage/clover.xml`.

Die Coverage bezieht sich nur auf den **von uns gepflegten Code** (Connector `PlentyOne`, Laravel-Integration `PlentyOneLaravel`, `PlentyOneServiceProvider`). Generierter Code (Requests, Dto, Resources aus dem SDK-Generator) ist in der Messung ausgenommen. Der Service Provider wird mit [Orchestra Testbench](https://packages.tools/testbench) (Laravel-Paket-Tests) geprüft; dafür ist `orchestra/testbench` als Dev-Abhängigkeit eingetragen (Laravel 11, PHP 8.2+).

## CI

Bei **Push oder Merge in `main`** (sowie bei Pull Requests gegen `main`) laufen automatisch:

- **Tests** (GitHub Actions, siehe Badge oben)
- **Code-Coverage** → Upload an [Codecov](https://codecov.io); Anzeige als Badge und im GitHub-PR

Falls dein GitHub-Repository einen anderen Pfad hat als `webkult/plentyone-saloon-api`, die Badge-URLs in diesem README anpassen. Codecov fügt öffentliche Repos beim ersten Upload automatisch hinzu.
