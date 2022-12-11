<?php


namespace App\Http\Services;

use App\Models\Color;

class ColorService
{

    private Color $color;


    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    public function create($request)
    {
        $colorCreated = $this->color->create([
            'name' => $request->name,
            'value' => $request->value,
        ]);
    }

    public function delete($id)
    {
        $color = $this->getById($id);
        $color->delete();
        return $color;
    }

    public function getAll()
    {
        return $this->color->all();
    }

    public function getById($id)
    {
        return $this->color->find($id);
    }

    public function find($id)
    {
        return $this->color->find($id);
    }
}
