<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PadNameModel extends Model
{
    /**
     * Nome da tabela no banco de dados.
     *
     * @var string
     */
    protected $table = 'notepads';

    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'content',
    ];

    /**
     * Os atributos que devem ser ocultos na serialização.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
