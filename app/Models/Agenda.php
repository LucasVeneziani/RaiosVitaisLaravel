<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agendas';

    protected $fillable = [
        'cliente_id',
        'funcionario_id',
        'data_agendamento',
        'data_expiracao',
    ];

    protected $casts = [
        'data_agendamento' => 'datetime',
        'data_expiracao'   => 'datetime',
    ];

    /** Um agendamento pertence a um cliente. */
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    /** Um agendamento pertence a um funcionário. */
    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
}
