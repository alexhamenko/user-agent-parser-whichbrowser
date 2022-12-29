<?php

namespace Hillel\UserAgent\WhichBrowserParser;

use WhichBrowser\Parser;
use Hillel\UserAgent\ParserInterface\UserAgentParserInterface;

class WhichBrowserService implements UserAgentParserInterface
{
    /** @var Parser */
    protected $_data;

    public function parse(?string $user_agent = null): void
    {
        $this->_data = new Parser($user_agent);
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
