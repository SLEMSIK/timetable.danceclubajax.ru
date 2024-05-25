function send_date(date){
    fetch(`/vendor/selectNewDateAtTimetable.php?date=${date}`);
}

function send_date_admin(date){
    fetch(`/vendor/selectNewDateAtTimetableAdmin.php?date=${date}`);
}