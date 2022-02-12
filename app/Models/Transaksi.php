<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $fillable = ['tgl_order', 'status_pelunasan', 'tgl_pembayaran'];


    public function detail()
    {
        return $this->belongsTo(Detail::class, 'transaction_id');
    }
}
