# IIM TD2

## Installation

```bash
composer require romainmltr/iim-td2  
```

### Local development

```bash
php vendor/bin/php-css-fixer fix src tests --rule-set=PSR12
```

```bash
php vendor/bin/phpstan analyse src tests --level max
```

```bash
php vendor/bin/phpunit
```

## Usage

```bash
php vendor/bin/phpunit tests
```