<?php

namespace App;

use JsonSerializable;

class Foo implements JsonSerializable
{
    public function jsonSerialize()
    {
        return ['foo' => 'bar'];
    }
}
