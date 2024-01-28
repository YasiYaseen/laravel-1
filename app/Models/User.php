<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable,SoftDeletes;
    protected $primarykey ='id';
    // protected $dates = ['date'];
    protected $hidden =['id'];
    protected $guarded =[];
  public function getdateFormatedAttribute($date){
        return date('d-M-Y',strtotime($this->date));
    }
    public function scopeActive($query){
        return $query->where('status','1');
    }
    public function getStatusTextAttribute(){
        return ($this->status == 1) ? 'Active' : 'InActive';

     }


    protected $appends = ['date_formated','status_text'];
}
