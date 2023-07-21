<a href="/city/{{ $model->slug }}/edit" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pen"></i></a>
<a href="/city/{{ $model->slug }}" class="btn btn-sm btn-primary" title="Detail"><i class="bi bi-eye"></i></a>
<form action="/city/{{ $model->slug }}" method="post" class="d-inline">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></button>
</form>