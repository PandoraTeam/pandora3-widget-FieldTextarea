<?php
namespace Pandora3\Widgets\FieldTextarea;

use Pandora3\Widgets\FormField\FormField;

/**
 * Class FieldTextarea
 * @package Pandora3\Widgets\FieldTextarea
 */
class FieldTextarea extends FormField {

	/**
	 * {@inheritdoc}
	 */
	protected function getView(): string {
		return __DIR__.'/Views/Widget';
	}

	/**
	 * {@inheritdoc}
	 */
	protected function beforeRender(array $context): array {
		$attribs = $context['attribs'] ?? '';
		if ($context['placeholder'] ?? '') {
			$attribs .= ' placeholder="'.$context['placeholder'].'"';
		}
		$height = $context['height'] ?? '';
		if ($height) {
			if (is_numeric($height)) {
				$height .= 'px';
			}
			$attribs .= ' style="height: '.$height.'"';
		}
		$context['attribs'] = $attribs;
		return $context;
	}

}