<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];

    protected $guarded = [];

    public static $rules = [
        'title' => 'required|string',
        'date' => 'required|date',
        'city' => 'required|string',
        'private' => 'required|boolean',
        'description' => 'required|string',
        'items' => 'required|array',
        'user_id' => 'required|exists:users,id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    // Adicione este método para verificar as regras de validação
    public function validate()
    {
        $validator = Validator::make($this->toArray(), self::$rules);

        if ($validator->fails()) {
            throw new \Exception($validator->errors()->first());
        }
    }
}
