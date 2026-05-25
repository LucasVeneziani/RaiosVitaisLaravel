<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'name',
        'email',
    ];

    /** Um cliente pode ter muitos agendamentos. */
    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }

    /** Funcionários vinculados a este cliente via agenda (NxN). */
    public function funcionarios()
    {
        return $this->belongsToMany(Funcionario::class, 'agendas')
                    ->withPivot('data_agendamento', 'data_expiracao')
                    ->withTimestamps();
    }
}
