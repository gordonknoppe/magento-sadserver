<?php

class Gk_Sadserver_Model_Writer extends Zend_Log_Writer_Stream
{
    /**
     * Class Constructor
     *
     * @param array|string|resource $streamOrUrl Stream or URL to open as a stream
     * @param string|null $mode Mode, only applicable if a URL is given
     * @return void
     * @throws Zend_Log_Exception
     */
    public function __construct($streamOrUrl, $mode = null)
    {
        parent::__construct($streamOrUrl, $mode);
        $this->_formatter = new Gk_Sadserver_Model_Formatter();
    }

    /**
     * @param Zend_Log_Formatter_Interface $formatter
     */
    public function setFormatter(Zend_Log_Formatter_Interface $formatter)
    {
        if ($formatter instanceof Gk_Sadserver_Model_Formatter) {
            parent::setFormatter($formatter);
        }
    }
}