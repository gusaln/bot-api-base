<?php

declare(strict_types=1);

namespace Greenplugin\TelegramBot\Method;

use Greenplugin\TelegramBot\Method\Traits\FillFromArrayTrait;
use Greenplugin\TelegramBot\Method\Traits\SendToChatVariablesTrait;

/**
 * Class SendContactMethod.
 *
 * @see https://core.telegram.org/bots/api#sendcontact
 */
class SendContactMethod
{
    use FillFromArrayTrait;
    use SendToChatVariablesTrait;

    /**
     * Contact's phone number.
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * Contact's first name.
     *
     * @var string
     */
    public $firstName;

    /**
     * Optional. Contact's last name.
     *
     * @var string|null
     */
    public $lastName;

    /**
     * Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes.
     *
     * @var string|null
     */
    public $vcard;

    /**
     * @param int|string $chatId
     * @param string     $phoneNumber
     * @param string     $firstName
     * @param array|null $data
     *
     * @throws \Greenplugin\TelegramBot\Exception\BadArgumentException
     *
     * @return SendContactMethod
     */
    public static function create(
        $chatId,
        string $phoneNumber,
        string $firstName,
        array $data = null
    ): SendContactMethod {
        $instance = new static();
        $instance->chatId = $chatId;
        $instance->phoneNumber = $phoneNumber;
        $instance->$firstName = $firstName;
        if ($data) {
            $instance->fill($data);
        }

        return $instance;
    }
}
