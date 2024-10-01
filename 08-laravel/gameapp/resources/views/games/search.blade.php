@forelse ($users as $user)
    <div class="users">
        <figure>
            <div>
                <img class="mask" src="{{ asset('images') . '/' . $user->photo }}" alt="Photo">
                <img class="border" src="{{ asset('images/shape-border-small.svg') }}" alt="Border">
            </div>
            <h4>{{ $user->fullname }}</h4>
            <p>{{ $user->role }}</p>
            <div class="btn-function-users">
                <a href="{{ url('users/' . $user->id) }}" class="btn-show">
                </a>
                <a href="{{ url('users/' . $user->id . '/edit') }}" class="btn-edit">
                </a>
                <a href="javascript:;" class="btn-delete" data-fullname="{{ $user->fullname }}">
                </a>
                <form action="{{ url('users/' . $user->id) }}" method="POST" style="display: none">
                    @csrf
                    @method('delete')
                </form>
            </div>
        </figure>
    </div>
@empty
    No found 😡
@endforelse