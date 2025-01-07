<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class KhachHang extends Model
{
    use HasFactory;
    protected $table = 'khachhang';
    protected $primaryKey = 'makh';
    protected $keyType = 'string';
    protected $fillable = ['makh', 'hoten', 'diachi', 'sdt'];
    
}
