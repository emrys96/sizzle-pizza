$(function() {

    $(document).on('click', '.trigger', function(event) {

        event.preventDefault();
        event.stopPropagation();


        var thisTrigger = $(this),
            thisTarget = thisTrigger.data('target'),
            siblingTarget;

        thisTrigger.toggleClass('open');

        $(thisTarget).toggleClass('dn');



        $('.trigger').each(function() {

            siblingTarget = $(this).data('target');

            if (siblingTarget !== thisTarget) {

                $(this).removeClass('open');

                $(siblingTarget).addClass('dn');

            }

        });


    });

});