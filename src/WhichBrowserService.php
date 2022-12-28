<?php

namespace Hillel\UserAgent\WhichBrowserParser;

use WhichBrowser\Parser;
use Hillel\UserAgent\ParserInterface\UserAgentParserInterface;

class WhichBrowserService implements UserAgentParserInterface
{
    /** @var Parser */
    protected $_data;

    public function __construct()
    {
        $this->_data = new Parser(request()->userAgent());
    }

    /**
     * @return string
     */
    public function getBrowser(): string
    {
        return $this->_data->browser->name;
    }

    /**
     * @return string
     */
    public function getOS(): string
    {
        return $this->_data->os->toString();
    }
}
