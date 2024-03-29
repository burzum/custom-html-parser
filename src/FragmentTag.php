<?php
declare(strict_types = 1);

namespace Phauthentic\CustomHtml;

use DOMElement;

/**
 * FragmentTag
 */
class FragmentTag extends AbstractElement
{
    /**
     *
     */
    public static function create()
    {
        return new self();
    }

    protected $template = '<div class="form-group"><input type="text" /></div>';

    /**
     *
     */
    public function __invoke(DOMElement $oldElement): void
    {
        $fragment = $this->createFragment($oldElement, $this->template);
        $oldElement->parentNode->replaceChild($fragment, $oldElement);
    }
}
