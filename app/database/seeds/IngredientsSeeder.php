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
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'dough',
                'current_stock' => 100,
                'price' => 45,
                'size' => 'large'
            ],
            [
                'ingredient_name' => 'shoestring fries',
                'current_stock' => 100,
                'price' => 20,
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'crisscross fries',
                'current_stock' => 100,
                'price' => 25,
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'mozzarella',
                'current_stock' => 100,
                'price' => 25,
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'mozzarella',
                'current_stock' => 100,
                'price' => 45,
                'size' => 'large'
            ],
            [
                'ingredient_name' => 'quickmelt',
                'current_stock' => 100,
                'price' => 19,
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'quickmelt',
                'current_stock' => 100,
                'price' => 30,
                'size' => 'large'
            ],
            [
                'ingredient_name' => 'pepperoni',
                'current_stock' => 100,
                'price' => 20,
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'pepperoni',
                'current_stock' => 100,
                'price' => 35,
                'size' => 'large'
            ],
            [
                'ingredient_name' => 'hungarian sausage',
                'current_stock' => 100,
                'price' => 20,
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'dough',
                'current_stock' => 100,
                'price' => 35,
                'size' => 'large'
            ],
            [
                'ingredient_name' => 'ham',
                'current_stock' => 100,
                'price' => 15,
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'ham',
                'current_stock' => 100,
                'price' => 25,
                'size' => 'large'
            ],
            [
                'ingredient_name' => 'hotdog',
                'current_stock' => 100,
                'price' => 15,
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'hotdog',
                'current_stock' => 100,
                'price' => 25,
                'size' => 'large'
            ],
            [
                'ingredient_name' => 'bacon',
                'current_stock' => 100,
                'price' => 15,
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'bacon',
                'current_stock' => 100,
                'price' => 25,
                'size' => 'large'
            ],
            [
                'ingredient_name' => 'green bell pepper',
                'current_stock' => 100,
                'price' => 10,
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'red bell pepper',
                'current_stock' => 100,
                'price' => 10,
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'chili flakes',
                'current_stock' => 100,
                'price' => 5,
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'onions',
                'current_stock' => 100,
                'price' => 5,
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'pineapple',
                'current_stock' => 100,
                'price' => 10,
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'pineapple',
                'current_stock' => 100,
                'price' => 15,
                'size' => 'large'
            ],
            [
                'ingredient_name' => 'mushroom',
                'current_stock' => 100,
                'price' => 10,
                'size' => 'solo'
            ],
            [
                'ingredient_name' => 'mushroom',
                'current_stock' => 100,
                'price' => 15,
                'size' => 'large'
            ],
            [
                'ingredient_name' => 'tomatoes',
                'current_stock' => 100,
                'price' => 5,
                'size' => 'solo'
            ]
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }
}

}