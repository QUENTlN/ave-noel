<?php

namespace App\src\models\Comment;

use App\src\config\Db;
use JsonSchema\Constraints\StringConstraint;

class Comment
{
    private int $id;
    private int $id_client;
    private int $id_post;
    private String $content;
    private \DateTime $created_at;
    private \DateTime $updated_at;
    private \DateTime $deleted_at;

    public function __construct($id,$id_client,$id_post,$content,$created_at,$updated_at,$deleted_at)
    {
        $this->id = $id;
        $this->id_client = $id_client;
        $this->id_post = $id_post;
        $this->content = $content;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->deleted_at = $deleted_at;
    }
}