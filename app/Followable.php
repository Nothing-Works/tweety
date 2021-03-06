<?php

namespace App;

trait Followable
{
    public function following(User $user)
    {
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
        // there is a toggle method as well.
        $this->follows()->toggle($user);

        // manual way to toggle it.
        // if ($this->following($user)) {
        //     return $this->unfollow($user);
        // }

        // return $this->follow($user);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'follows', 'following_user_id', 'user_id');
    }
}
