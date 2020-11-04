<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

class telefones extends Model
{
    
    protected $table = 'telefones';
    protected $primarykey = 'id';
    public $timestamps = false; 
    use Authenticatable; 
    use HasFactory;
    protected $fillable = ['', '', ]; 

    public function setFillable($data, $contato_id){
        $this->fillable = ['comercial' => $data['comercial'], 
                          'residencial' => $data['residencial'], 
                          'celular' => $data['celular']];
    }

    public function nomesContatos(){
        return static::select('contatos.nome');
    }
}
