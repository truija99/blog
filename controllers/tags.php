<?php
/**
 * Created by PhpStorm.
 * User: mari-liis.truija
 * Date: 10.01.2019
 * Time: 11:04
 */

namespace App;


class tags
{

    function index() {
        $this->tags = get_all("SELECT tag_name, COUNT (post_id) AS count FROM post_tags NATURAL JOIN tag GROUP BY tag_id");
        $this->posts = get_all("SELECT * FROM post_tags NATURAL JOIN post");
    }

}

