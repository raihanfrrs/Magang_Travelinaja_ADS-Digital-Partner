@if (isset($model->city->name) && isset($model->city->country->name))
    {{ $model->city->country->name }} - {{ $model->city->name }}
@elseif (isset($model->city->name))
    {{ $model->city->name }}
@elseif (isset($model->city->country->name))
    {{ $model->city->country->name }}
@else
    City Has Been Deleted
@endif