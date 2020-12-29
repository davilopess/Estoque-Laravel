<?php

namespace estoque\Policies;

use estoque\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProdutoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function delete(User $user, Produto $produto)
    {
        return $user->id === $produto->produtos_id;
    }
}
