<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categoria
 *
 * @property int $id
 * @property string|null $nome
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Collection|Nomeproduto[] $nomeprodutos
 * @property Collection|Produto[] $produtos
 *
 * @package App\Models
 */
class Categoria extends Model
{
    use SoftDeletes;
    protected $table = 'categorias';
    public $incrementing = true;
    public $timestamps = true;


    protected $casts = [
        'id' => 'int'
    ];

    protected $fillable = [
        'nome'
    ];

    public function nomeprodutos()
    {
        return $this->hasMany(Nomeproduto::class, 'categoriaid');
    }

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'categoriaid');
    }
}