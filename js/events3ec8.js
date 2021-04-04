$(document).ready(function() {
    $(document).on('zorka_page_show', function(e, params) {
        // Example: params = {pageName: 'services', url: 'https://zorka.agency/services/', referer: 'https://zorka.agency/cases/'}
        ym(71136571, 'hit', params.url, {referer: params.referer});
    });

    $(document).on('zorka_hello_beforeSend', function() {
    });

    $(document).on('zorka_hello_success', function() {
        ym(71136571,'reachGoal','form_send');
        fbq('trackCustom', 'form_send');
    });

    $(document).on('zorka_hello_error', function() {
    });

    $(document).on('click', '[data-event]', function() {
        const event = $(this).data('event');

        switch (event) {
            case 'partners_email':
                fbq('trackCustom', 'email_send');
                ym(71136571,'reachGoal','email_send');
                break;
            case 'footer_linkedin':
                break;
            case 'footer_youtube':
                break;
            case 'footer_instagram':
                break;
            case 'footer_facebook':
                break;
            case 'footer_mediakit':
            case 'mobile_mediakit':
                ym(71136571,'reachGoal','download_mediakit');
                break;
            case 'footer_email':
                fbq('trackCustom', 'email_send');
                ym(71136571,'reachGoal','email_send');
                break;
        }
    });
});
