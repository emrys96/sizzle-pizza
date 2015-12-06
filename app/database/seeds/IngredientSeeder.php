<?php

class IngredientSeeder extends Seeder
{

public function run()
{
    $ingredients = [
                       [
                'ingredient_name' => 'dough',
                'current_stock' => 100,
                'price' => 25,
                // 'size' => 'solo',
                'category' => 'base',
                'image_location' => '../images/ingredients/base.png'
            ],
            [
                'ingredient_name' => 'shoestring fries',
                'current_stock' => 100,
                'price' => 20,
                // 'size' => 'solo',
                'category' => 'base',
                'image_location' => '../images/ingredients/shoestring.png'
            ],
            [
                'ingredient_name' => 'crisscross fries',
                'current_stock' => 100,
                'price' => 25,
                // 'size' => 'solo',
                'category' => 'base',
                'image_location' => '../images/ingredients/crisscross.png'
            ],
            [
                'ingredient_name' => 'marinara',
                'current_stock' => 100,
                'price' => 0,
                // 'size' => 'solo',
                'category' => 'sauce',
                'image_location' => '../images/ingredients/marinara.png'
            ],
            [
                'ingredient_name' => 'olive oil',
                'current_stock' => 100,
                'price' => 0,
                // 'size' => 'solo',
                'category' => 'sauce',
                'image_location' => '../images/ingredients/oliveoil.png'
            ],
            [
                'ingredient_name' => 'mozzarella',
                'current_stock' => 100,
                'price' => 25,
                // 'size' => 'solo',
                'category' => 'cheese',
                'image_location' => '../images/ingredients/mozzarella.png'
            ],
            [
                'ingredient_name' => 'quickmelt',
                'current_stock' => 100,
                'price' => 19,
                // 'size' => 'solo',
                'category' => 'cheese',
                'image_location' => '../images/ingredients/quickmelt.png'
            ],
            [
                'ingredient_name' => 'pepperoni',
                'current_stock' => 100,
                'price' => 20,
                // 'size' => 'solo',
                'category' => 'meat',
                'image_location' => '../images/ingredients/pepperoni.png'
            ],
            [
                'ingredient_name' => 'hungarian sausage',
                'current_stock' => 100,
                'price' => 20,
                // 'size' => 'solo',
                'category' => 'meat',
                'image_location' => '../images/ingredients/sausage.png'
            ],
            [
                'ingredient_name' => 'ham',
                'current_stock' => 100,
                'price' => 15,
                // 'size' => 'solo',
                'category' => 'meat',
                'image_location' => '../images/ingredients/ham.png'
            ],
            [
                'ingredient_name' => 'hotdog',
                'current_stock' => 100,
                'price' => 15,
                // 'size' => 'solo',
                'category' => 'meat',
                'image_location' => '../images/ingredients/hotdog.png'
            ],
            [
                'ingredient_name' => 'bacon',
                'current_stock' => 100,
                'price' => 15,
                // 'size' => 'solo',
                'category' => 'meat',
                'image_location' => '../images/ingredients/bacon.png'
            ],
            [
                'ingredient_name' => 'green bell pepper',
                'current_stock' => 100,
                'price' => 10,
                // 'size' => 'solo',
                'category' => 'chili',
                'image_location' => '../images/ingredients/greenbellpepper.png'
            ],
            [
                'ingredient_name' => 'red bell pepper',
                'current_stock' => 100,
                'price' => 10,
                // 'size' => 'solo',
                'category' => 'chili',
                'image_location' => '../images/ingredients/redbellpepper.png'
            ],
            [
                'ingredient_name' => 'chili flakes',
                'current_stock' => 100,
                'price' => 5,
                // 'size' => 'solo',
                'category' => 'chili',
                'image_location' => '../images/ingredients/chiliflakes.png'
            ],
            [
                'ingredient_name' => 'pineapple',
                'current_stock' => 100,
                'price' => 10,
                // 'size' => 'solo',
                'category' => 'topping',
                'image_location' => '../images/ingredients/pineapple.png'
            ],
            [
                'ingredient_name' => 'mushroom',
                'current_stock' => 100,
                'price' => 10,
                // 'size' => 'solo',
                'category' => 'topping',
                'image_location' => '../images/ingredients/mushroom.png'
            ],
            [
                'ingredient_name' => 'tomatoes',
                'current_stock' => 100,
                'price' => 5,
                // 'size' => 'solo',
                'category' => 'topping',
                'image_location' => '../images/ingredients/tomatoes.png'
            ],
            [
                'ingredient_name' => 'onions',
                'current_stock' => 100,
                'price' => 5,
                // 'size' => 'solo',
                'category' => 'topping',
                'image_location' => '../images/ingredients/onion.png'
            ]
            

        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }
}

}