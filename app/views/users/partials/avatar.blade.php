<a href="{{ route('profile_path', $user->username) }}">
	<img class="media-object avatar {{ isset($class) ? $class : '' }}" src="{{ $user->present()->gravatar(isset($size) ? $size: 30) }}"
		alt="{{ $user->username }}">
</a>