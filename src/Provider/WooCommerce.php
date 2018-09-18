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
    'Ameliorated',
    'Assimilated',
    'Automated',
    'Balanced',
    'Business-focused',
    'Centralized',
    'Cloned',
    'Compatible',
    'Configurable',
    'Cross-group',
    'Cross-platform',
    'Customer-focused',
    'Customizable',
    'Decentralized',
    'De-engineered',
    'Devolved',
    'Digitized',
    'Distributed',
    'Diverse',
    'Down-sized',
    'Enhanced',
    'Enterprise-wide',
    'Ergonomic',
    'Exclusive',
    'Expanded',
    'Extended',
    'Face to face',
    'Focused',
    'Front-line',
    'Fully-configurable',
    'Function-based',
    'Fundamental',
    'Future-proofed',
    'Grass-roots',
    'Horizontal',
    'Implemented',
    'Innovative',
    'Integrated',
    'Intuitive',
    'Inverse',
    'Managed',
    'Mandatory',
    'Monitored',
    'Multi-channelled',
    'Multi-lateral',
    'Multi-layered',
    'Multi-tiered',
    'Networked',
    'Object-based',
    'Open-architected',
    'Open-source',
    'Operative',
    'Optimized',
    'Optional',
    'Organic',
    'Organized',
    'Persevering',
    'Persistent',
    'Phased',
    'Polarised',
    'Pre-emptive',
    'Proactive',
    'Profit-focused',
    'Profound',
    'Programmable',
    'Progressive',
    'Public-key',
    'Quality-focused',
    'Reactive',
    'Realigned',
    'Re-contextualized',
    'Re-engineered',
    'Reduced',
    'Reverse-engineered',
    'Right-sized',
    'Robust',
    'Seamless',
    'Secured',
    'Self-enabling',
    'Sharable',
    'Stand-alone',
    'Streamlined',
    'Switchable',
    'Synchronised',
    'Synergistic',
    'Synergized',
    'Team-oriented',
    'Total',
    'Triple-buffered',
    'Universal',
    'Up-sized',
    'Upgradable',
    'User-centric',
    'User-friendly',
    'Versatile',
    'Virtual',
    'Visionary',
    'Vision-oriented',
  ];

  protected static $adjectives = [
    'Aerodynamic',
    'Amazing',
    'Awesome',
    'Cool',
    'Durable',
    'Enormous',
    'Ergonomic',
    'Fantastic',
    'Generic',
    'Good',
    'Gorgeous',
    'Great',
    'Handcrafted',
    'Handmade',
    'Heavy Duty',
    'Incredible',
    'Intelligent',
    'Killer',
    'Licensed',
    'Lightweight',
    'Mediocre',
    'Practical',
    'Premium',
    'Refined',
    'Rustic',
    'Sleek',
    'Small',
    'Special',
    'Stellar',
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
    'Abundant',
    'Jumbo',
    'Puny',
    'Big-boned',
    'Large',
    'Scrawny',
    'Chubby',
    'Little',
    'Short',
    'Fat',
    'Long',
    'Small',
    'Giant',
    'Majestic',
    'Tall',
    'Gigantic',
    'Mammoth',
    'Teeny',
    'Great',
    'Massive',
    'Thin',
    'Huge',
    'Miniature',
    'Tiny',
    'Immense',
    'Petite',
    'Vast',
  ];

  protected static $shape = [
    'Blobby',
    'Distorted',
    'Rotund',
    'Broad',
    'Flat',
    'Round',
    'Chubby',
    'Fluffy',
    'Skinny',
    'Circular',
    'Globular',
    'Square',
    'Crooked',
    'Hollow',
    'Steep',
    'Curved',
    'Low',
    'Straight',
    'Cylindrical',
    'Narrow',
    'Triangular',
    'Deep',
    'Oval',
    'Wide',
  ];

  protected static $materials = [
    'Aluminum',
    'Bronze',
    'Concrete',
    'Copper',
    'Cotton',
    'Fresh',
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
        $this->generator->optional(0.8)->randomElement(static::$adjectives),
        $this->generator->optional(0.3)->randomElement(static::$sizes),
        $this->generator->optional(0.3)->randomElement(static::$colors),
        $this->generator->optional(0.1)->randomElement(static::$buzzwords),
        $this->generator->optional(0.8)->randomElement(static::$materials),
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
