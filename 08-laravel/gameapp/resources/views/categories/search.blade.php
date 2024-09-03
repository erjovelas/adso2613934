@forelse ($categories as $category)
    <div class="users">
        <figure>
            <div>
                <img class="mask" src="{{ asset('images') . '/' . $category->image }}" alt="Photo">
                <img class="border" src="{{ asset('images/shape-border-small.svg') }}" alt="Border">
            </div>
            <h4>{{ $category->name }}</h4>
            <p>{{ $category->manufacturer }}</p>
            <div class="btn-function-users">
                <a href="{{ url('categories/' . $category->id) }}" class="btn-show">
                </a>
                <a href="{{ url('categories/' . $category->id . '/edit') }}" class="btn-edit">
                </a>
                <a href="javascript:;" class="btn-delete" data-fullname="{{ $category->name }}">
                </a>
                <form action="{{ url('categories/' . $category->id) }}" method="POST" style="display: none">
                    @csrf
                    @method('delete')
                </form>
            </div>
        </figure>
    </div>
@empty
    No found 😡
@endforelse