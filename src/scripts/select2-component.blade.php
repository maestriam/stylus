@pushOnce('scripts')
<script type="text/javascript">
    $('.select2').select2({
        minimumResultsForSearch: -1,
        placeholder: function(){
            $(this).data('placeholder');
        }
    });

    $('.select2').select2().on('change', function (e) {        
        let livewire = $(this).data('livewire')  
        let model = $(this).data('model')    
        eval(livewire).set(model, $(this).val());
    })
</script>
@endpushOnce