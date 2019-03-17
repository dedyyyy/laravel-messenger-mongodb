<?php

namespace Dedyyyy\Messenger\Test\Stubs\Models;

use Dedyyyy\Messenger\Models\Message;

class CustomMessage extends Message
{
    protected $table = 'custom_messages';
}
