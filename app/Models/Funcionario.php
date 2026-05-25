<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionarios';

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'cargo',
    ];

    protected $hidden = [
        'password',
    ];

    /** Um funcionário pode ter muitos agendamentos. */
    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }

    /** Clientes vinculados a este funcionário via agenda (NxN). */
    public function clientes()
    {
        return $this->belongsToMany(Cliente::class, 'agendas')
                    ->withPivot('data_agendamento', 'data_expiracao')
                    ->withTimestamps();
    }
}
