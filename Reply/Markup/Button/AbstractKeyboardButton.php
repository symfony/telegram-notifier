<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Notifier\Bridge\Telegram\Reply\Markup\Button;

/**
 * @author Mihail Krasilnikov <mihail.krasilnikov.j@gmail.com>
 */
abstract class AbstractKeyboardButton
{
    protected array $options = [];

    public function toArray(): array
    {
        return $this->options;
    }
}
