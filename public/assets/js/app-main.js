/**
 * Toggle Day Night
 * =========================
 * Function to change css color to day and night
 */
const toggleDayNight = () => {
    let status = $('#day-night-toggle').is(':checked') ? true : false;
    if(status) {
        lightStatus('night');
        localStorage.lightStatus = 'night';
        return true;
    }
    
    lightStatus('day');
    localStorage.lightStatus = 'day';
    return true;
}

/**
 * Change Light
 * =========================
 * Function to change light according to light status
 */
const lightStatus = (status) => {
    if(status === 'day') {
        $('body').removeClass('dark-mode').addClass('light-mode');
        $('.main-header').removeClass('navbar-dark').addClass('navbar-light');
        return true;
    }
    
    $('body').addClass('dark-mode').removeClass('light-mode');
    $('nav').addClass('navbar-dark').removeClass('navbar-light');
    return true;
}

$(function() {
    // Check Day or Night setting
    if(localStorage.lightStatus === 'night') {
        lightStatus('night');
        $('#day-night-toggle').prop('checked', true);
        return true;
    }
    
    lightStatus('day');
    $('#day-night-toggle').prop('checked', false);
    return true;
})