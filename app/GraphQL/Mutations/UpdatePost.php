<?php

namespace App\GraphQL\Mutations;

use App\Models\PostModel;

final class UpdatePost
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $post = PostModel::find($args['id']);

        if (!$post) {
            return null; // Puedes personalizar esto según tu lógica de negocio
        }

        // Actualiza los campos relevantes
        $post->update([
            'name' => $args['name'],
            'text' => $args['text'],
            // Agrega otros campos según sea necesario
        ]);

        return $post;
    }
}
