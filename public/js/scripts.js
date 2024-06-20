$(document).ready(function() {
    // Lấy ngày hiện tại
    var today = new Date();
    var formattedToday = today.getDate() + '/' + (today.getMonth() + 1) + '/' + today.getFullYear();

    // Khởi tạo datepicker cho 'từ ngày'
    $('#fromDate').datepicker({
        format: 'dd/mm/yyyy',
        startDate: today,
        todayHighlight: true,
        autoclose: true
    }).on('changeDate', function(selected) {
        var minDate = new Date(selected.date.valueOf());
        $('#toDate').datepicker('setStartDate', minDate);
    });

    // Khởi tạo datepicker cho 'đến ngày'
    $('#toDate').datepicker({
        format: 'dd/mm/yyyy',
        startDate: today,
        todayHighlight: true,
        autoclose: true
    }).on('changeDate', function(selected) {
        var maxDate = new Date(selected.date.valueOf());
        $('#fromDate').datepicker('setEndDate', maxDate);
    });

    // Hiển thị datepicker khi nhấp vào biểu tượng lịch
    $('#fromDateGroup .input-group-append').click(function() {
        $('#fromDate').datepicker('show');
    });

    $('#toDateGroup .input-group-append').click(function() {
        $('#toDate').datepicker('show');
    });
});
