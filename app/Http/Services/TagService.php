<?php

namespace App\Http\Services;

use App\Models\Tag;
use Illuminate\Support\Str;

class TagService
{
    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    public function createMultipleTags($tags)
    {
        foreach ($tags as $item) {
            $tagCreated = $this->tag->firstOrCreate([
                'name' => $item,
                'slug' => Str::slug($item),
            ]);
            $tagIds[] = $tagCreated->id;
        }
        return $tagIds;
    }
    public function getAll()
    {
        return $this->tag->all();
    }

}
