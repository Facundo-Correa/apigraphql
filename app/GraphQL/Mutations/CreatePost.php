<?php

namespace App\GraphQL\Mutations;

use App\Models\PostModel;

final class CreatePost
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     * @return \App\Models\PostModel
     */
    public function __invoke($_, array $args): PostModel
    {
        $post = new PostModel([
            'name' => $args['name'],
            'text' => $args['text'],
        ]);

        $post->save();

        return $post;
    }
}
