<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title','dateFrom','timeFrom','dateTo','timeTo','timeZone','location','description','outCome','meetingNotes','relatedTo','attendees'
    ];
}
