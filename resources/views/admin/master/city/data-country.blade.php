@if (isset($model->country->name))
    {{ $model->country->name }}
@else
    Don't Have Country
@endif