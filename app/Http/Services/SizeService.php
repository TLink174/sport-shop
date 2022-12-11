<?php


namespace App\Http\Services;

use App\Models\Size;

class SizeService
{

    private Size $size;


    public function __construct(Size $size)
    {
        $this->size = $size;
    }

    public function create($request)
    {
        $sizeCreated = $this->size->create([
            'name' => $request->name,
            'value' => $request->value,
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

    public function find($id)
    {
        return $this->size->find($id);
    }
}
