<?php

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Concerns\CanBePrecognitive;
use Illuminate\Http\Concerns\InteractsWithContentTypes;
use Illuminate\Http\Concerns\InteractsWithFlashData;
use Illuminate\Http\Concerns\InteractsWithInput;
use Illuminate\Support\Traits\Macroable;

class Request extends Request implements
    Arrayable,
    ArrayAccess
{
    use CanBePrecognitive,
        InteractsWithContentTypes,
        InteractsWithFlashData,
        InteractsWithInput,
        Macroable;
}
