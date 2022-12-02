<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Enums\TransactionType;
use App\Enums\UserRole;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $username
 * @property float $balance
 * @property string $password
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Transaction[] $transactions
 *
 * @method static Builder users()
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    protected $casts = [
        'balance' => 'float'
    ];

    protected $hidden = [
        'password'
    ];

    protected $fillable = [
        'name',
        'username',
        'balance',
        'password'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function deposit_transactions()
    {
        return $this->transactions()->where('transactions.type', TransactionType::Deposit);
    }

    public function withdraw_transactions()
    {
        return $this->transactions()->where('transactions.type', TransactionType::Withdraw);
    }

    public function isAdmin()
    {
        return $this->role == UserRole::Admin;
    }

    public function isUser()
    {
        return $this->role == UserRole::User;
    }

    public function scopeUsers($query)
    {
        return $query->where('role', UserRole::User);
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($user) {
            $user->transactions()->delete();
        });
    }
}
