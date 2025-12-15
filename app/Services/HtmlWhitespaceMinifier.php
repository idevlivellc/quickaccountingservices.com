<?php

namespace App\Services;

class HtmlWhitespaceMinifier
{
	public function minify(string $html): string
	{
		$html = preg_replace('/<!--(?!\s*(?:\[if|\<\!\[endif)).*?-->/', '', $html);

		$html = preg_replace('/>\s+</', '><', $html);
		
		$html = preg_replace('/\s{2,}/', ' ', $html);

		return trim($html);
	}
}