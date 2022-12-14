<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Enums\TransactionType;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 *
 * @property int $id
 * @property float $value
 * @property string $type
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property User $user
 *
 * @method static Builder deposit()
 * @method static Builder withdraw()
 *
 * @package App\Models
 */
class Transaction extends Model
{
    protected $table = 'transactions';

    protected $casts = [
        'value' => 'float',
        'user_id' => 'int'
    ];

    protected $fillable = [
        'value',
        'type',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeDeposit($query)
    {
        return $query->where('transactions.type', TransactionType::Deposit);
    }

    public function scopeWithdraw($query)
    {
        return $query->where('transactions.type', TransactionType::Withdraw);
    }
}
