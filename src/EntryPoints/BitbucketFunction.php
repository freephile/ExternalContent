<?php

declare( strict_types = 1 );

namespace ProfessionalWiki\ExternalContent\EntryPoints;

use Parser;

final class BitbucketFunction {

	public static function onParserFirstCallInit( Parser $parser ): void {
		$parser->setFunctionHook(
			'bitbucket',
			fn( Parser $parser, string ...$arguments )
				=> ( new self() )->handleParserFunctionCall( $parser, ...$arguments )
		);
	}

	public function __construct() {
	}

	/**
	 * @param Parser $parser
	 * @param string ...$arguments
	 * @return array|string
	 */
	public function handleParserFunctionCall( Parser $parser, string ...$arguments ) {
		return 'TODO';
	}

}
