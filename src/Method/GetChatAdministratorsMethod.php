<?php

declare(strict_types=1);

namespace Greenplugin\TelegramBot\Method;

use Greenplugin\TelegramBot\Method\Traits\ChatIdVariableTrait;

/**
 * Class GetChatAdministratorsMethod.
 *
 * @see https://core.telegram.org/bots/api#getchatadministrators
 */
class GetChatAdministratorsMethod
{
    use ChatIdVariableTrait;

    /**
     * @param int|string $chatId
     *
     * @return GetChatAdministratorsMethod
     */
    public static function create($chatId): GetChatAdministratorsMethod
    {
        $instance = new static();
        $instance->chatId = $chatId;

        return $instance;
    }
}
