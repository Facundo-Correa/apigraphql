<?php

namespace App\GraphQL\Mutations;

use App\Models\PostModel;

class PostMutator
{
    /**
     * @field
     * @param  \Nuwave\Lighthouse\Schema\Context $context
     * @param  array $args
     * @return \App\Models\PostModel
     */
    public function createPost($root, array $args): PostModel
    {
        $post = new PostModel([
            'name' => $args['name'],
            'text' => $args['text'],
        ]);

        $post->save();

        return $post;
    }
}
