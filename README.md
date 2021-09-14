# External Content

MediaWiki extension that allows embedding external content, specified by URL, into your wiki pages.

Currently only supports Markdown files hosted on a Bitbucket server.

## Development

To ensure the dev dependencies get installed, have this in your `composer.local.json`:

```json
{
	"require": {
		"vimeo/psalm": "^4.10",
		"phpstan/phpstan": "^0.12.99"
	},
	"extra": {
		"merge-plugin": {
			"include": [
				"extensions/ExternalContent/composer.json"
			]
		}
	}
}
```

### Running tests and CI checks

You can use the `Makefile` by running make commands in the `ExternalContent` directory.

* `make ci`: Run everything
* `make test`: Run all tests
* `make cs`: Run all style checks and static analysis

Alternatively, you can execute commands from the MediaWiki root directory:

* PHPUnit: `php tests/phpunit/phpunit.php -c extensions/ExternalContent/`
* Style checks: `vendor/bin/phpcs -p -s --standard=extensions/ExternalContent/phpcs.xml`
* PHPStan: `vendor/bin/phpstan analyse --configuration=extensions/ExternalContent/phpstan.neon --memory-limit=2G`
* Psalm: `php vendor/bin/psalm --config=extensions/ExternalContent/psalm.xml`
