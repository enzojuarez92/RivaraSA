<?php

namespace App\Policies;

use App\User;
use App\Client;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClientPolicy
{
    use HandlesAuthorization;

    public function before($user)
    {
        if($user->hasRole('Admin'))
        {
            return true;
        }
    }


    /**
     * Determine whether the user can view the client.
     *
     * @param  \App\User  $user
     * @param  \App\Client  $client
     * @return mixed
     */
    public function view(User $user, Client $client)
    {
        return $user->hasPermissionTo('client.view');
    }

    /**
     * Determine whether the user can create clients.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermissionTo('client.update');
    }

    /**
     * Determine whether the user can update the client.
     *
     * @param  \App\User  $user
     * @param  \App\Client  $client
     * @return mixed
     */
    public function update(User $user, Client $client)
    {
        return $user->hasPermissionTo('client.update');
    }

    /**
     * Determine whether the user can delete the client.
     *
     * @param  \App\User  $user
     * @param  \App\Client  $client
     * @return mixed
     */
    public function delete(User $user, Client $client)
    {
        return $user->hasPermissionTo('client.update');
    }

    /**
     * Determine whether the user can restore the client.
     *
     * @param  \App\User  $user
     * @param  \App\Client  $client
     * @return mixed
     */
    public function restore(User $user, Client $client)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the client.
     *
     * @param  \App\User  $user
     * @param  \App\Client  $client
     * @return mixed
     */
    public function forceDelete(User $user, Client $client)
    {
        //
    }
}
