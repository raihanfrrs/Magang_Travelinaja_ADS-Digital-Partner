<a href="/user/{{ $model->slug }}/edit" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pen"></i></a>
<form action="/user/{{ $model->slug }}" method="post" class="d-inline">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></button>
</form>