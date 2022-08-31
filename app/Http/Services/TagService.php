<?php

namespace App\Http\Services;

use App\Models\Tag;
use Illuminate\Support\Str;

class TagService
{
    private Tag $tag;

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

    public function update( $request, $id)
    {
        $this->tag->find($id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
    }

    public function getById($id)
    {
        return $this->tag->find($id);
    }

    public function getPaginated(int $int)
    {
        return $this->tag->paginate($int);
    }

    public function create($request)
    {
        $this->tag->firstOrCreate([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

    }

    public function delete($id)
    {
        $this->tag->find($id)->delete();
    }

}
