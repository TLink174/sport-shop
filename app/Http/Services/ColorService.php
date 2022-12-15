<?php


namespace App\Http\Services;

use App\Models\Color;
use Illuminate\Support\Str;

class ColorService
{

    private Color $color;


    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    public function createMultipleColors($colors)
    {
        foreach ($colors as $item) {
            $colorCreated = $this->color->firstOrCreate([
                'name' => $item,
                'value' => $item,
            ]);
            $colorIds[] = $colorCreated->id;
        }
        return $colorIds;
    }

    public function create($request)
    {
        $this->color->firstOrCreate([
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

    public function getPaginated(int $int)
    {
        return $this->color->paginate($int);
    }

    public function find($id)
    {
        return $this->color->find($id);
    }
    public function restore($id)
    {
        $this->color->restore($id);
        return redirect()->route('admin.color.index');
    }
}
