<?php declare(strict_types=1);

namespace App\Models;

use App\Models\Concerns\HasRelations;
use App\Models\Contracts\BaseModelContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Study extends Model implements BaseModelContract
{
    use HasFactory;
    use HasRelations;
}
