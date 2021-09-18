<?php

declare( strict_types = 1 );

namespace ProfessionalWiki\ExternalContent\Tests\Integration\EntryPoints;

use PHPUnit\Framework\TestCase;
use ProfessionalWiki\ExternalContent\Tests\TestEnvironment;

/**
 * @covers \ProfessionalWiki\ExternalContent\EntryPoints\BitbucketFunction
 * @covers \ProfessionalWiki\ExternalContent\EntryPoints\MediaWikiHooks
 * @covers \ProfessionalWiki\ExternalContent\Presentation\ParserFunctionEmbedPresenter
 */
class BitbucketFunctionIntegrationTest extends TestCase {

	public function testTodo(): void {
		$this->assertStringContainsString(
			'TODO bitbucket',
			TestEnvironment::instance()->parse( '{{#bitbucket:}}' )
		);
	}

}
