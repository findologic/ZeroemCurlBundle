<?php

namespace Zeroem\RemoteHttpKernelBundle\Curl\ResponsePopulator;

use Symfony\Component\HttpFoundation\Response;

class PopulateContent extends AbstractPopulator
{
    public function populate() {
        list($handle, $content) = func_get_args();

        $this->response->setContent($this->response->getContent().$content);

        return strlen($content);
    }
}

