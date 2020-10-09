<?php

namespace IvanDokov\FluentDate\Formats;

use IvanDokov\FluentDate\Formats\Contracts\TimeFormatInterface;

class Timezone extends BaseFormat implements TimeFormatInterface
{
    public function getFormat(): string
    {
        return 'e';
    }
}
