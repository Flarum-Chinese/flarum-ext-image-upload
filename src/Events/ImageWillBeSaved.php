<?php 
/*
 * This file is part of flagrow/flarum-ext-image-upload.
 *
 * Copyright (c) Flagrow.
 *
 * http://flagrow.github.io
 *
 * For the full copyright and license information, please view the license.md
 * file that was distributed with this source code.
 */

namespace Flagrow\ImageUpload\Events;

use Flagrow\ImageUpload\Image;
use Flarum\Core\Post;
use Flarum\Core\User;

class ImageWillBeSaved
{
    /**
     * The post this image was upload in.
     *
     * @var Post
     */
    public $post;

    /**
     * The user performing the action.
     *
     * @var User
     */
    public $actor;

    /**
     * The image uploaded.
     *
     * @var Image
     */
    public $image;

    /**
     * The actual image.
     *
     * @var string
     */
    public $body;

    /**
     * @param Post  $post
     * @param User  $actor The user performing the action.
     * @param Image $image
     */
    public function __construct(Post $post = null, User $actor, Image $image, $body)
    {
        $this->post = $post;
        $this->actor = $actor;
        $this->image = $image;
        $this->body = $body;
    }
}
