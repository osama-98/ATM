<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Deposit()
 * @method static static Withdraw()
 */
final class TransactionType extends Enum
{
    const Deposit   = "deposit";
    const Withdraw  = "withdraw";
}
