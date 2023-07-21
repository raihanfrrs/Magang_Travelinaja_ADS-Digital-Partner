$(document).ready(function () {
    $('#dataCity').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/dataCity',
        columns: [
            { data: 'id', name: 'id', class: 'text-center' },
            { data: 'name', name: 'name', class: 'text-center text-capitalize' },
            { data: 'country', name: 'country', class: 'text-center text-capitalize' },
            { data: 'day', name: 'day', class: 'text-center' },
            { data: 'price', name: 'price', class: 'text-center' },
            { data: 'action', name: 'action', class: 'text-center' }
        ]
    });

    $('#dataCountry').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/dataCountry',
        columns: [
            { data: 'id', name: 'id', class: 'text-center' },
            { data: 'name', name: 'name', class: 'text-center text-capitalize' },
            { data: 'continent', name: 'continent', class: 'text-center text-capitalize' },
            { data: 'action', name: 'action', class: 'text-center' }
        ]
    });
});