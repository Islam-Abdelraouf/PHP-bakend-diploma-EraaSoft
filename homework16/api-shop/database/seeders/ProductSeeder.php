<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Quinoa Fruit Salad',
                'price' => 2000,
                'image' => 'combo1.jpg',
                'description' => 'A refreshing mix of quinoa and fruits, perfect for a healthy brunch.',
                'ingredients' => 'Red Quinoa, Lime, Honey, Blueberries, Strawberries, Mango, Fresh Mint',
            ],
            [
                'name' => 'Avocado Chicken Bowl',
                'price' => 3500,
                'image' => 'combo2.jpg',
                'description' => 'Packed with protein and flavor, this bowl keeps you energized.',
                'ingredients' => 'Avocado, Grilled Chicken, Spinach, Cherry Tomatoes, Olive Oil',
            ],
            [
                'name' => 'Mediterranean Veggie Wrap',
                'price' => 2500,
                'image' => 'combo3.jpg',
                'description' => 'A zesty wrap full of Mediterranean goodness.',
                'ingredients' => 'Whole Wheat Wrap, Hummus, Cucumbers, Olives, Feta Cheese, Lettuce',
            ],
            [
                'name' => 'Mango Smoothie Bowl',
                'price' => 1800,
                'image' => 'combo4.jpg',
                'description' => 'A tropical smoothie bowl topped with fresh fruits.',
                'ingredients' => 'Mango, Greek Yogurt, Granola, Banana, Coconut Flakes',
            ],
            [
                'name' => 'Classic Caesar Salad',
                'price' => 2200,
                'image' => 'combo5.jpg',
                'description' => 'Crisp romaine lettuce with creamy Caesar dressing.',
                'ingredients' => 'Romaine Lettuce, Parmesan, Croutons, Caesar Dressing, Grilled Chicken',
            ],
            [
                'name' => 'Quinoa Fruit Salad',
                'price' => 2000,
                'image' => 'images/products/salad1.jpg',
                'description' => 'A refreshing mix of quinoa and fresh fruits.',
                'ingredients' => 'Quinoa, Lime, Honey, Blueberries, Strawberries, Mango, Fresh mint',
            ],
            [
                'name' => 'Mediterranean Chickpea Bowl',
                'price' => 2500,
                'image' => 'images/products/bowl1.jpg',
                'description' => 'Protein-packed bowl with a Mediterranean twist.',
                'ingredients' => 'Chickpeas, Olive oil, Cucumber, Tomatoes, Feta cheese, Parsley',
            ],
            [
                'name' => 'Avocado Wrap',
                'price' => 1800,
                'image' => 'images/products/wrap1.jpg',
                'description' => 'Creamy avocado wrapped with fresh veggies.',
                'ingredients' => 'Whole wheat tortilla, Avocado, Spinach, Tomatoes, Cucumber, Hummus',
            ],
            [
                'name' => 'Green Detox Smoothie',
                'price' => 1500,
                'image' => 'images/products/smoothie1.jpg',
                'description' => 'Energize your day with greens and fruit blend.',
                'ingredients' => 'Kale, Spinach, Banana, Green apple, Lemon juice, Ginger',
            ],
            [
                'name' => 'Grilled Chicken Salad',
                'price' => 2700,
                'image' => 'images/products/salad2.jpg',
                'description' => 'Light yet filling, perfect for lunch or dinner.',
                'ingredients' => 'Grilled chicken breast, Romaine lettuce, Cherry tomatoes, Olive oil, Lemon dressing',
            ],
            [
                'name' => 'Berry Power Smoothie',
                'price' => 1600,
                'image' => 'images/products/smoothie2.jpg',
                'description' => 'Antioxidant boost with mixed berries.',
                'ingredients' => 'Blueberries, Strawberries, Raspberries, Greek yogurt, Honey',
            ],
            [
                'name' => 'Falafel Wrap',
                'price' => 1900,
                'image' => 'images/products/wrap2.jpg',
                'description' => 'Middle Eastern classic wrapped to perfection.',
                'ingredients' => 'Falafel, Hummus, Lettuce, Pickles, Tomatoes, Tahini sauce',
            ],
            [
                'name' => 'Vegan Buddha Bowl',
                'price' => 2600,
                'image' => 'images/products/bowl2.jpg',
                'description' => 'A colorful bowl of whole foods and grains.',
                'ingredients' => 'Brown rice, Chickpeas, Avocado, Roasted sweet potato, Spinach, Sesame seeds',
            ],
            [
                'name' => 'Mango Coconut Smoothie',
                'price' => 1400,
                'image' => 'images/products/smoothie3.jpg',
                'description' => 'Tropical sweetness with creamy coconut.',
                'ingredients' => 'Mango, Coconut milk, Pineapple, Banana',
            ],
            [
                'name' => 'Asian Sesame Salad',
                'price' => 2300,
                'image' => 'images/products/salad3.jpg',
                'description' => 'Crunchy vegetables with sesame dressing.',
                'ingredients' => 'Cabbage, Carrots, Cucumber, Sesame seeds, Soy sauce, Rice vinegar',
            ],
        ];
        Product::insert($products);
    }
}
