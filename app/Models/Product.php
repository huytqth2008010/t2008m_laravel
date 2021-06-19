<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Product extends Model {
        use HasFactory;
        protected $table = "products";
        protected $fillable = [
            "name",
            "image",
            "description",
            "price",
            "qty",
            "brands_id",
            "category_id"
        ];

        public function Category()
        {
            return $this->belongsTo(Category::class, "category_id");
        }

        public function Brand(){
            return $this->belongsTo(Brand::class, "brands_id", "id");
        }

    }
