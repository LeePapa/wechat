<?php

declare(strict_types=1);

namespace EasyWeChat\OfficialAccount\Contracts;

use Psr\Http\Message\ResponseInterface;

interface Server
{
    public function serve(): ResponseInterface;
}
