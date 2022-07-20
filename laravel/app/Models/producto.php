<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
 
class Producto extends Model
{
    use HasUUID;
    protected $table = 'db_productos';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $uuidFieldName = 'id';
}