<?php

namespace Erusev\Parsedown\Html\Renderables;

use Erusev\Parsedown\Html\Renderable;
use Erusev\Parsedown\Html\Sanitisation\Escaper;

final class Text implements Renderable
{
    /** @var string */
    private $text;

    /**
     * @param string $text
     */
    public function __construct($text = '')
    {
        $this->text = $text;
    }

    /** @return string */
    public function getHtml()
    {
        return Escaper::htmlElementValue($this->text);
    }
}