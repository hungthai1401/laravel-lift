<?php

declare(strict_types=1);

namespace WendellAdriel\Lift\Tests\Datasets;

use Illuminate\Database\Eloquent\Model;
use WendellAdriel\Lift\Attributes\PrimaryKey;
use WendellAdriel\Lift\Attributes\Relations\BelongsTo;
use WendellAdriel\Lift\Attributes\Rules;
use WendellAdriel\Lift\Lift;

#[BelongsTo(Book::class, 'custom_id', 'id')]
class Price extends Model
{
    use Lift;

    #[PrimaryKey]
    public int $id;

    #[Rules(['required', 'integer'])]
    public int $price;

    protected $fillable = [
        'price',
    ];
}
