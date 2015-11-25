<?php

class IngredientsSeeder extends Seeder
{

public function run()
{
    $ingredients = [
            [
                'ingredient_name' => 'dough',
                'current_stock' => 100,
                'price' => 25,
                'size' => 'solo',
                'image_location' => '../images/ingredients/dough.png'
            ],
            [
                'ingredient_name' => 'dough',
                'current_stock' => 100,
                'price' => 45,
                'size' => 'large',
                'image_location' => '../images/ingredients/dough.png'
            ],
            [
                'ingredient_name' => 'shoestring fries',
                'current_stock' => 100,
                'price' => 20,
                'size' => 'solo',
                'image_location' => '../images/ingredients/dough.png'
            ],
            [
                'ingredient_name' => 'crisscross fries',
                'current_stock' => 100,
                'price' => 25,
                'size' => 'solo',
                'image_location' => '../images/ingredients/dough.png'
            ],
            [
                'ingredient_name' => 'mozzarella',
                'current_stock' => 100,
                'price' => 25,
                'size' => 'solo',
                'image_location' => '../images/ingredients/mozzarella.png'
            ],
            [
                'ingredient_name' => 'mozzarella',
                'current_stock' => 100,
                'price' => 45,
                'size' => 'large',
                'image_location' => '../images/ingredients/mozzarella.png'
            ],
            [
                'ingredient_name' => 'quickmelt',
                'current_stock' => 100,
                'price' => 19,
                'size' => 'solo',
                'image_location' => '../images/ingredients/quickmelt.png'
            ],
            [
                'ingredient_name' => 'quickmelt',
                'current_stock' => 100,
                'price' => 30,
                'size' => 'large',
                'image_location' => '../images/ingredients/quickmelt.png'
            ],
            [
                'ingredient_name' => 'pepperoni',
                'current_stock' => 100,
                'price' => 20,
                'size' => 'solo',
                'image_location' => '../images/ingredients/pepperoni.png'
            ],
            [
                'ingredient_name' => 'pepperoni',
                'current_stock' => 100,
                'price' => 35,
                'size' => 'large',
                'image_location' => '../images/ingredients/pepperoni.png'
            ],
            [
                'ingredient_name' => 'hungarian sausage',
                'current_stock' => 100,
                'price' => 20,
                'size' => 'solo',
                'image_location' => '../images/ingredients/salami.png'
            ],
            [
                'ingredient_name' => 'hungarian sausage',
                'current_stock' => 100,
                'price' => 35,
                'size' => 'large',
                'image_location' => '../images/ingredients/salami.png'
            ],
            [
                'ingredient_name' => 'ham',
                'current_stock' => 100,
                'price' => 15,
                'size' => 'solo',
                'image_location' => '../images/ingredients/ham.png'
            ],
            [
                'ingredient_name' => 'ham',
                'current_stock' => 100,
                'price' => 25,
                'size' => 'large',
                'image_location' => '../images/ingredients/ham.png'
            ],
            [
                'ingredient_name' => 'hotdog',
                'current_stock' => 100,
                'price' => 15,
                'size' => 'solo',
                'image_location' => '../images/ingredients/hotdog.png'
            ],
            [
                'ingredient_name' => 'hotdog',
                'current_stock' => 100,
                'price' => 25,
                'size' => 'large',
                'image_location' => '../images/ingredients/hotdog.png'
            ],
            [
                'ingredient_name' => 'bacon',
                'current_stock' => 100,
                'price' => 15,
                'size' => 'solo',
                'image_location' => '../images/ingredients/bacon.png'
            ],
            [
                'ingredient_name' => 'bacon',
                'current_stock' => 100,
                'price' => 25,
                'size' => 'large',
                'image_location' => '../images/ingredients/bacon.png'
            ],
            [
                'ingredient_name' => 'green bell pepper',
                'current_stock' => 100,
                'price' => 10,
                'size' => 'solo',
                'image_location' => '../images/ingredients/greenbellpepper.png'
            ],
            [
                'ingredient_name' => 'red bell pepper',
                'current_stock' => 100,
                'price' => 10,
                'size' => 'solo',
                'image_location' => '../images/ingredients/redbellpepper.png'
            ],
            [
                'ingredient_name' => 'chili flakes',
                'current_stock' => 100,
                'price' => 5,
                'size' => 'solo',
                'image_location' => '../images/ingredients/chiliflakes.png'
            ],
            [
                'ingredient_name' => 'onions',
                'current_stock' => 100,
                'price' => 5,
                'size' => 'solo',
                'image_location' => '../images/ingredients/onion.png'
            ],
            [
                'ingredient_name' => 'pineapple',
                'current_stock' => 100,
                'price' => 10,
                'size' => 'solo',
                'image_location' => '../images/ingredients/pineapple.png'
            ],
            [
                'ingredient_name' => 'pineapple',
                'current_stock' => 100,
                'price' => 15,
                'size' => 'large',
                'image_location' => '../images/ingredients/pineapple.png'
            ],
            [
                'ingredient_name' => 'mushroom',
                'current_stock' => 100,
                'price' => 10,
                'size' => 'solo',
                'image_location' => '../images/ingredients/mushroom.png'
            ],
            [
                'ingredient_name' => 'mushroom',
                'current_stock' => 100,
                'price' => 15,
                'size' => 'large',
                'image_location' => '../images/ingredients/mushroom.png'
            ],
            [
                'ingredient_name' => 'tomatoes',
                'current_stock' => 100,
                'price' => 5,
                'size' => 'solo',
                'image_location' => '../images/ingredients/tomatoes.png'
            ]
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }
}

}