<script>

@if (session('success'))
    $.notify({
        // options
        message: '{{ (session('success')) }}'
    },{
        // settings
        type: 'success'
    });
@endif


@if (session('warning'))
$.notify({
	// options
	message: '{{ (session('warning')) }}' 
},{
	// settings
	type: 'warning'
});

@endif

@if (session('danger'))
$.notify({
	// options
	message: '{{ (session('danger')) }}' 
},{
	// settings
	type: 'danger'
});

@endif

</script>