// $('#txtdate').datepicker({ 
//     minDate: 0 ,
//     beforeShowDay: $.datepicker.noWeekends 
//     });
    // SELECT 3
    $(document).ready(function() {
    $(".select3_single").select2({
      placeholder: "Select a request",
      allowClear: true
    });
    $(".select2_group").select2({});
  });
  //   $('#other').change(function(){
  //    selection = $(this).val();    
  //    switch(selection)
  //    { 
  //        case 'Other':
  //            $('#otherType').show();
  //            break;
  //        default:
  //            $('#otherType').hide();
  //            break;
  //    }
  // });
