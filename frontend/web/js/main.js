$(function() {
    $('#worker-id').on('change',function(){
        $dr_val = $(this).val();
        window.location='/worker/'+$dr_val;
    });
    $('#month-id').on('change',function(){
        $drr_val = $(this).val();
        window.location='/month/'+$drr_val;
    });
    $('#department-id').on('change',function(){
        $drrr_val = $(this).val();
        window.location='/department/'+$drrr_val;
    })
});