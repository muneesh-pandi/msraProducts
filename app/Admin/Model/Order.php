<?php

namespace App\Admin\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'comment',
        'order',
        'total',
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
//    public function contacts()
//    {
//        return $this->belongsToMany(Contact::class);
//    }
//    public function scopeWithContact($query, $contactId)
//    {
//        $query->whereHas('contacts', function ($q) use ($contactId) {
//            $q->where('contact_id', $contactId);
//        });
//    }
//    public function setContactIdAttribute($contactId)
//    {
//        $this->save();
//        $contact = Contact::find($contactId);
//        $this->contacts()->attach($contact);
//    }
}