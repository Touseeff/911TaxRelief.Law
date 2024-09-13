<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TaxRegistryRecord extends Model
{
    use HasFactory;
    protected $table = "tax_registry_record";
    protected $primaryKey = 'url_pin';


    public $incrementing = false;


    public $timestamps = false;

    protected $fillable = [
        'url_pin',
        'phone_pin',
        'name',
        'firm',
        'mailing',
        'city',
        'state',
        'zip',
        'zip5',
        'zip4',
        'crrt',
        'dpc',
        'barcode',
        'salut',
        'first',
        'mi',
        'last',
        'deg',
        'type',
        'creditor',
        'amount',
        'upload_date',
        'file_date',
        'rdi_',
        'ran'
    ];


    protected $casts = [
        'file_date' => 'string',
    ];


    public function getUploadDateAttribute()
    {

        if ($this->attributes['upload_date']) {
            try {
                $date = new \DateTime($this->attributes['upload_date']);
                return $date->format('d-m-Y');
            } catch (\Exception $e) {
                return 'Invalid date';
            }
        }
        return 'Date not set';
    }


    // public function setUploadDateAttribute($value)
    // {
    //     // Check if 'upload_date' is a valid date
    //     if ($value) {
    //         try {
    //             $date = new \DateTime($value);
    //             // Store the date in YYYYMMDD format
    //             $this->attributes['upload_date'] = $date->format('Ymd');
    //         } catch (\Exception $e) {
    //             // Handle invalid date input
    //             $this->attributes['upload_date'] = null;
    //         }
    //     } else {
    //         $this->attributes['upload_date'] = null;
    //     }
    // }


    public function getFileDateAttribute()
    {

        if ($this->attributes['file_date']) {
            try {
                $date = new \DateTime($this->attributes['file_date']);
                return $date->format('d-m-Y');
            } catch (\Exception $e) {
                return 'Invalid date';
            }
        }
        return 'Date not set';
    }


    //     public function setFileDateAttribute($value)
    // {
    //     // Check if 'file_date' is a valid date
    //     if ($value) {
    //         try {
    //             $date = new \DateTime($value);
    //             // Store the date in YYYYMMDD format
    //             $this->attributes['file_date'] = $date->format('Ymd');
    //         } catch (\Exception $e) {
    //             // Handle invalid date input
    //             $this->attributes['file_date'] = null;
    //         }
    //     } else {
    //         $this->attributes['file_date'] = null;
    //     }
    // }

}
