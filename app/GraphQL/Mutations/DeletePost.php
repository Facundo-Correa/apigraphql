<?php

namespace App\GraphQL\Mutations;
use App\Models\PostModel;

final class DeletePost
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $post = PostModel::find($args['id']);

        if (!$post) {
            return null;
        }

        $post->delete();

        return $post;
    }
}
