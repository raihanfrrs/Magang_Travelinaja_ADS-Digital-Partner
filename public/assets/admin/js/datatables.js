$(document).ready(function () {
    $('#dataUser').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/dataUser',
        columns: [
            { data: 'id', name: 'id', class: 'text-center' },
            { data: 'name', name: 'name', class: 'text-center text-capitalize' },
            { data: 'email', name: 'email', class: 'text-center' },
            { data: 'phone', name: 'phone', class: 'text-center' },
            { data: 'action', name: 'action', class: 'text-center' }
        ]
    });

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
            { data: 'population', name: 'population', class: 'text-center' },
            { data: 'territory', name: 'territory', class: 'text-center' },
            { data: 'avg_price', name: 'avg_price', class: 'text-center' },
            { data: 'action', name: 'action', class: 'text-center' }
        ]
    });

    $('#dataDeal').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/dataDeal',
        columns: [
            { data: 'id', name: 'id', class: 'text-center' },
            { data: 'city', name: 'city', class: 'text-center text-capitalize' },
            { data: 'day', name: 'day', class: 'text-center' },
            { data: 'price', name: 'price', class: 'text-center' },
            { data: 'until', name: 'until', class: 'text-center' },
            { data: 'action', name: 'action', class: 'text-center' }
        ]
    });
});