<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Barang as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Barang extends Model
{
    protected $table="barang"; 
    public $timestamps= false; 
 /**    
 * The attributes that are mass assignable. *
 * @var array
 */
    protected $fillable = [
    'kode_barang',
    'nama_barang',
    'kategori_barang',
    'harga',
    'qty',
    ];

}
