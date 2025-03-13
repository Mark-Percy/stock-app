<?php

namespace App\Models;

use Illuminate\Support\Arr;
class Recipe {

    private $recipes = [];

    public function __construct() {
        $this->recipes = [
            [
                'id' => 1,
                'name' => 'Spaghetti Bol',
                'Ingredients' => [
                    'Spaghetti',
                    'Tomato'
                ]
            ],
            [
                'id' => 2,
                'name' => 'Tomato Soup',
                'Ingredients' => [
                    'Milk',
                    'Tomato'
                ]
            ]
        ];
    }

    public function get_all_recipes(): array {
        return $this->recipes;
    }

    public function getRecipe($id): array {
        $recipe = Arr::first($this->get_all_recipes(), fn($recipe) => $recipe['id'] == $id);
        if(!$recipe) {
            abort(404);
        }
        return $recipe;
    }
}

?>