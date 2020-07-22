@unless (current_user()->is($user))
<form method="POST" action="/profiles/{{$user->name}}/follow">
    @csrf
    <button type="submit" class="px-4 py-2 text-xs text-white bg-blue-500 rounded-full shadow">
        {{current_user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
    </button>
</form>
@endunless