<?php


namespace App\Http\Services;

use App\Models\Size;
use Illuminate\Support\Str;

class SizeService
{

    private Size $size;


    public function __construct(Size $size)
    {
        $this->size = $size;
    }

    public function createMultipleSizes($sizes)
    {
        foreach ($sizes as $item) {
            $sizeCreated = $this->size->firstOrCreate([
                'name' => $item,
                'value' => Str::slug($item),
            ]);
            $sizeIds[] = $sizeCreated->id;
        }
        return $sizeIds;
    }

    public function create($request)
    {
        $this->size->firstOrCreate([
            'name' => $request->name,
            'value' => Str::slug($request->name),
        ]);
    }

    public function delete($id)
    {
        $size = $this->getById($id);
        $size->delete();
        return $size;
    }

    public function getAll()
    {
        return $this->size->all();
    }

    public function getById($id)
    {
        return $this->size->find($id);
    }

    public function getPaginated(int $int)
    {
        return $this->size->paginate($int);
    }

    public function find($id)
    {
        return $this->size->find($id);
    }
}
