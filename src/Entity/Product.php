<?php

namespace Hellonico\Fixtures\Entity;

class Product extends Entity
{
    public $name;
    public $type;
    public $status = 'draft';
    public $featured;
    public $catalog_visibility;
    public $description;
    public $short_description;
    public $sku;
    public $regular_price;
    public $sale_price;
    public $date_on_sale_from;
    public $date_on_sale_from_gmt;
    public $date_on_sale_to;
    public $date_on_sale_to_gmt;
    public $virtual;
    public $downloadable;
    public $downloads;
    public $download_limit;
    public $download_expiry;
    public $tax_status;
    public $tax_class;
    public $manage_stock;
    public $stock_quantity;
    public $in_stock;
    public $backorders;
    public $sold_individually;
    public $weight;
    public $dimensions;
    public $shipping_class;
    public $reviews_allowed;
    public $upsell_ids;
    public $cross_sell_ids;
    public $parent_id;
    public $purchase_note;
    public $categories;
    public $tags;
    public $images;
    public $attributes;
    public $default_attributes;
    public $menu_order;
    public $meta_data;

    /**
     * {@inheritdoc}
     */
    public function create()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function persist()
    {
      return $this->runcommand('wc product create');
    }

    /**
     * {@inheritdoc}
     */
    public function exists($id)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function setCurrentId($id)
    {

    }

    /**
     * {@inheritdoc}
     */
    public static function delete()
    {

    }
}
