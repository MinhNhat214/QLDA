// // Scripts 
// $(document).ready(function() {
//     // Lấy ngày hiện tại
//     var today = new Date();
//     var formattedToday = today.getDate() + '/' + (today.getMonth() + 1) + '/' + today.getFullYear();

//     // Khởi tạo datepicker cho 'từ ngày'
//     $('#fromDate').datepicker({
//         format: 'dd/mm/yyyy',
//         startDate: formattedToday,
//         todayHighlight: true,
//         autoclose: true
//     }).on('changeDate', function(selected) {
//         var minDate = new Date(selected.date.valueOf());
//         $('#toDate').datepicker('setStartDate', minDate);
//     });

//     // Khởi tạo datepicker cho 'đến ngày'
//     $('#toDate').datepicker({
//         format: 'dd/mm/yyyy',
//         startDate: formattedToday,
//         todayHighlight: true,
//         autoclose: true
//     }).on('changeDate', function(selected) {
//         var maxDate = new Date(selected.date.valueOf());
//         $('#fromDate').datepicker('setEndDate', maxDate);
//     });
// });
