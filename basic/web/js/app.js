$(document).ready(function() {
    $('#buy_mile').on('keyup', function(event) {
        $('#buy_price').val($(this).val() * 50);
    });

    $('#datePicker')
        .datepicker({
            format: 'yyyy-mm-dd'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'date');
        });
});