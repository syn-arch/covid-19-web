$(function(){

    $('#country_name').hide()

    $('#categories').change(function(){
        if ($(this).val() == 'get_by_country') {
            $('#country_name').show()
            $('.country_input').focus()
        }else{
            $('#country_name').hide()
        }
    })

    // smooth scroll
    $("a").on('click', function(event) {
        event.preventDefault();
        $('html').animate({
            scrollTop: $(this.hash).offset().top - 55
        }, 1000);

    });

    $(window).scroll(function(){

        if ($(window).scrollTop() > 70) {
            $('.navbar').addClass('bg-light shadow');
            $('.nav-link').removeClass('text-white');
            $('.nav-brand').removeClass('text-white');
            $('.nav-link').addClass('text-dark');
            $('.nav-brand').addClass('text-dark');
            $('.nav-toggler-i').addClass('text-dark');
        }else{
            $('.navbar').removeClass('bg-light shadow');
            $('.nav-link').addClass('text-white');
            $('.nav-brand').addClass('text-white');
            $('.nav-link').removeClass('text-dark');
            $('.nav-brand').removeClass('text-dark');
            $('.nav-toggler-i').removeClass('text-dark');
        }

    })

    // ScrollReveal().reveal('.discover-left', {
    //     origin : 'left',
    //     distance : '50px',
    //     delay : 0,
    //     easing : 'ease-in-out',
    //     reset:true
    // })

    // ScrollReveal().reveal('.discover-right', {
    //     origin : 'right',
    //     distance : '50px',
    //     delay : 0,
    //     easing : 'ease-in-out',
    //     reset:true
    // })

    // ScrollReveal().reveal('.symptoms-element, .prevention-rev, .contaigon-rev, .subscribe-rev, #landing-text', {
    //     origin : 'bottom',
    //     distance : '50px',
    //     delay : 100,
    //     easing : 'ease-out',
    //     reset:true
    // })

    $('#subscribe-button').click(function(e){
        e.preventDefault()
        $('.input-subscribe').val('')
        $('.input-subscribe').focus()
        Swal.fire('Thanks very much','Subscribe successfully!','success')
    })

    $('#form-information').submit(function(e){
        e.preventDefault()
        var categories = $('#categories').val()

        if (categories == 'select_categories') {
            Swal.fire('Warning','You not choose categories yet!','warning')
        }

        if (categories == 'get_by_country') {
            if ($('.country_name').val() == '') {
                Swal.fire('Warning','You not input country name yet!','warning')
            }
        }
    })
})