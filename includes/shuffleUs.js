$(document).ready(function() {

    /* initialize shuffle plugin */
    var $grid = $('#grid');

    $grid.shuffle({
        itemSelector: '.shuffle-item' // the selector for the items in the grid
    });
    $('.filter-options').click(function (e) {
        e.preventDefault();
        // set active class
        $(".filter-options").removeClass('active');
        $(this).addClass('active');

        // get group name from clicked item
        var groupName = $(this).attr('data-group');

        // reshuffle grid
        $grid.shuffle('shuffle', groupName );
    });

});

