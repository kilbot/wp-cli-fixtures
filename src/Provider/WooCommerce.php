<?php

namespace Hellonico\Fixtures\Provider;

use Faker\Provider\Base;

class WooCommerce extends Base
{

  protected static $categories = [
    'Automotive',
    'Baby',
    'Beauty',
    'Books',
    'Clothing',
    'Computers',
    'Electronics',
    'Games',
    'Garden',
    'Grocery',
    'Health',
    'Home',
    'Industrial',
    'Jewelry',
    'Kids',
    'Movies',
    'Music',
    'Outdoors',
    'Shoes',
    'Sports',
    'Tools',
    'Toys',
  ];

  protected static $buzzwords = [
    'Adaptive',
    'Advanced',
    'Automated',
    'Balanced',
    'Business-focused',
    'Centralized',
    'Cloned',
    'Compatible',
    'Configurable',
    'Cross-platform',
    'Crypto',
    'Customizable',
    'Decentralized',
    'Digitized',
    'Distributed',
    'Enhanced',
    'Ergonomic',
    'Exclusive',
    'Expanded',
    'Extended',
    'Focused',
    'Fundamental',
    'Future-proofed',
    'Grass-roots',
    'Innovative',
    'Integrated',
    'Intuitive',
    'Inverse',
    'Monitored',
    'Multi-channelled',
    'Multi-lateral',
    'Multi-layered',
    'Multi-tiered',
    'Networked',
    'Open-source',
    'Organic',
    'Phased',
    'Polarised',
    'Proactive',
    'Programmable',
    'Progressive',
    'Reactive',
    'Realigned',
    'Re-contextualized',
    'Re-engineered',
    'Reverse-engineered',
    'Robust',
    'Seamless',
    'Self-enabling',
    'Sharable',
    'Stand-alone',
    'Streamlined',
    'Switchable',
    'Synergistic',
    'Team-oriented',
    'Total',
    'Universal',
    'Upgradable',
    'User-centric',
    'User-friendly',
    'Versatile',
    'Virtual',
    'Visionary',
  ];

  protected static $adjectives = [
    'Aerodynamic',
    'Amazing',
    'Awesome',
    'Cool',
    'Durable',
    'Ergonomic',
    'Fantastic',
    'Generic',
    'Gorgeous',
    'Handcrafted',
    'Handmade',
    'Heavy Duty',
    'Incredible',
    'Licensed',
    'Lightweight',
    'Practical',
    'Premium',
    'Refined',
    'Rustic',
    'Sleek',
    'Special',
    'Sweet',
    'Tasty',
    'Unbranded',
  ];

  protected static $colors = [
    'Azure',
    'Black',
    'Blue',
    'Bright',
    'Brown',
    'Crimson',
    'Dark',
    'Gold',
    'Gray',
    'Green',
    'Indigo',
    'Lavender',
    'Light',
    'Magenta',
    'Multicolored',
    'Mustard',
    'Orange',
    'Pink',
    'Pinkish',
    'Purple',
    'Red',
    'Rosy',
    'Scarlet',
    'Silver',
    'Turquoise',
    'Violet',
    'White',
    'Yellow',
  ];

  protected static $sizes = [
    'Enormous',
    'Giant',
    'Gigantic',
    'Huge',
    'Immense',
    'Jumbo',
    'Large',
    'Little',
    'Long',
    'Mammoth',
    'Massive',
    'Miniature',
    'Petite',
    'Small',
    'Tall',
    'Teeny',
    'Thin',
    'Tiny',
  ];

  protected static $shape = [
    'Broad',
    'Circular',
    'Curved',
    'Cylindrical',
    'Deep',
    'Distorted',
    'Flat',
    'Fluffy',
    'Hollow',
    'Low',
    'Narrow',
    'Oval',
    'Rotund',
    'Round',
    'Skinny',
    'Square',
    'Straight',
    'Triangular',
    'Wide',
  ];

  protected static $materials = [
    'Aluminum',
    'Bronze',
    'Concrete',
    'Copper',
    'Cotton',
    'Frozen',
    'Granite',
    'Iron',
    'Leather',
    'Linen',
    'Marble',
    'Metal',
    'Paper',
    'Plastic',
    'Rubber',
    'Silk',
    'Soft',
    'Steel',
    'Wooden',
    'Wool',
  ];

  protected static $nouns = [
    'Bacon',
    'Bag',
    'Ball',
    'Bench',
    'Bike',
    'Bottle',
    'Car',
    'Chair',
    'Cheese',
    'Chicken',
    'Chips',
    'Clock',
    'Coat',
    'Computer',
    'Fish',
    'Gloves',
    'Hat',
    'Hoodie',
    'Keyboard',
    'Knife',
    'Lamp',
    'Mouse',
    'Pants',
    'Pizza',
    'Plate',
    'Salad',
    'Sausages',
    'Shirt',
    'Shoes',
    'Soap',
    'Table',
    'Toothbrush',
    'Towels',
    'Tuna',
    'Wallet',
    'Watch',
  ];

  /**
   *
   */
  public function productName()
  {
    return implode(
      ' ',
      array_filter([
        $this->generator->optional(0.3)->randomElement(static::$sizes),
        $this->generator->optional(0.8)->randomElement(static::$adjectives),
        $this->generator->optional(0.1)->randomElement(static::$buzzwords),
        $this->generator->randomElement([
          $this->generator->randomElement(static::$colors),
          $this->generator->randomElement(static::$materials)
        ]),
        $this->generator->randomElement(static::$nouns)
      ])
    );
  }

  /**
   *
   */
  public function productPrice($nbMaxDecimals = 2, $min = 0, $max = 1000)
  {
    return strval( $this->generator->randomFloat($nbMaxDecimals, $min, $max) );
  }

  /**
   *
   */
  public function productCategoryName()
  {
    return $this->generator->randomElement(static::$categories);
  }

}
