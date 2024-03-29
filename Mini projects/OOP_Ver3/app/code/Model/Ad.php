<?php

namespace Model;

use Helper\DBHelper;
use Core\AbstractModel;
use Core\Interfaces\ModelInterface;

class Ad extends AbstractModel implements ModelInterface
{
    protected const TABLE = 'ads';

    private $title;

    private $description;

    private $manufacturerId;

    private $modelId;

    private $price;

    private $year;

    private $typeId;

    private $userId;

    private $image;

    private $active;

    private $slug;

    private $views;

    public function __construct($id = null)
    {
        if($id !== null){
            $this->load($id);
        }
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    /**
     * @param mixed $manufacturerId
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;
    }

    /**
     * @return mixed
     */
    public function getModelId()
    {
        return $this->modelId;
    }

    /**
     * @param mixed $modelId
     */
    public function setModelId($modelId)
    {
        $this->modelId = $modelId;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @param mixed $typeId
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function isActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    public function setViews($views)
    {
        $this->views = $views;
    }

    public function getViews()
    {
        return $this->views;
    }

    public function assignData()
    {
        $this->data = [
            'title' => $this->title,
            'description' => $this->description,
            'manufacturer_id' => $this->manufacturerId,
            'model_id' => $this->modelId,
            'price' => $this->price,
            'year' => $this->year,
            'type_id' => $this->typeId,
            'user_id' => $this->userId,
            'image' => $this->image,
            'active' => $this->active,
            'slug' => $this->slug,
            'views' => $this->views
        ];
    }


    public function load($id)
    {
        $db = new DBHelper();
        $ad = $db->select()->from(self::TABLE)->where('id', $id)->getOne();
        if (!empty($ad)) {
            $this->id = $ad['id'];
            $this->title = $ad['title'];
            $this->title = $ad['title'];
            $this->manufacturerId = $ad['manufacturer_id'];
            $this->description = $ad['description'];
            $this->modelId = $ad['model_id'];
            $this->price = $ad['price'];
            $this->year = $ad['year'];
            $this->typeId = $ad['type_id'];
            $this->userId = $ad['user_id'];
            $this->image = $ad['image'];
            $this->active = $ad['active'];
            $this->slug = $ad['slug'];
            $this->views = $ad['views'];
        }

        return $this;
    }

    public function loadBySlug($slug)
    {
        $db = new DBHelper();
        $rez = $db->select()->from(self::TABLE)->where('slug', $slug)->getOne();
        if (!empty($rez)) {
            $this->load($rez['id']);
            return $this;
        } else {
            return false;
        }
    }

    public static function getAllAds($page = null, $limit = null)
    {
        $db = new DBHelper();
        $db->select()->from(self::TABLE)->where('active', 1);
        if ($limit != null) {
            $db->limit($limit);
        }
        if ($page != null) {
            $db->offset($page);
        }
        $data = $db->get();
        $ads = [];
        foreach ($data as $element) {
            $ad = new Ad();
            $ad->load($element['id']);
            $ads[] = $ad;
        }
        return $ads;
    }

    public static function getPopularAds($limit)
    {
        $db = new DBHelper();
        $data = $db->select()
            ->from(self::TABLE)
            ->where('active', 1)
            ->orderBy('views', 'DESC')
            ->limit($limit)
            ->get();
        $ads = [];
        foreach ($data as $element) {
            $ad = new Ad();
            $ad->load($element['id']);
            $ads[] = $ad;
        }
        return $ads;
    }

    public static function getLatest($limit)
    {
        $db = new DBHelper();
        $data = $db->select()
            ->from(self::TABLE)
            ->where('active', 1)
            ->orderBy('id', 'DESC')
            ->limit($limit)
            ->get();
        $ads = [];
        foreach ($data as $element) {
            $ad = new Ad();
            $ad->load($element['id']);
            $ads[] = $ad;
        }
        return $ads;
    }
}