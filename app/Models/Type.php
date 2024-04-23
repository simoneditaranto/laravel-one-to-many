<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Type extends Model
{
    use HasFactory;

    // una categoria può appartenere a più progetti
    public function projects() {
        return $this->hasMany(Project::class);
    }
}
