/**
 * Toggle Day Night
 * =========================
 * Function to change css color to day and night
 */
const toggleDayNight = () => {
    let status = $('#day-night-toggle').is(':checked') ? true : false;
    if(status) {
        $('body').addClass('dark-mode').removeClass('light-mode');
        $('nav').addClass('navbar-dark').removeClass('navbar-light');
        // console.log('Dark');
        return true;
    }
    
    $('body').removeClass('dark-mode').addClass('light-mode');
    $('.main-header').removeClass('navbar-dark').addClass('navbar-light');
    // console.log('Light');
    return true;
}