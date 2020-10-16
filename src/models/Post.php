<?php

namespace App\src\models\Post;

use App\src\config\Db;

class Post
{
    private int $id;
    private int $id_client;
    private String $content;
    private String $title;
    private \DateTime $created_at;
    private \DateTime $updated_at;
    private \DateTime $deleted_at;

    public function __construct($id,$id_client,$content,$title,$created_at,$updated_at,$deleted_at)
    {
        $this->id = $id;
        $this->id_client = $id_client;
        $this->content = $content;
        $this->title = $title;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->deleted_at = $deleted_at;
    }
}