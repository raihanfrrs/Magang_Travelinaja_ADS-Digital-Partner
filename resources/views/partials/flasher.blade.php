@if (session('case') == 'default')
    <script>
        Swal.fire({
            position: `{{ session('position') }}`,
            icon: `{{ session('type') }}`,
            title: `{{ session('message') }}`,
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@else
    
@endif