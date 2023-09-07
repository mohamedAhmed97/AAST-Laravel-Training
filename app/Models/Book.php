<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'cat_id'        
    ];

    /**
     * Get the category that owns the Book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public static function uploadFile($request, $neededFile)
    {
        $fileName = "book_" . time() . '_' . $neededFile->getClientOriginalName();
        $request->file('upload_image')->storeAs(
            'public/books',
            $fileName
        );
        return $fileName;
    }
}
