var deleteTriangle = function(tri){
    $(tri).remove(".grid-triangle");
};

var addTriangle = function(tri){
    var triangle = "<div class='grid-triangle'></div>";
    $(tri).after(triangle);
};

var triangleHeight = 15;

//Sets the height of the container to the toggled accordion panel, adds arrows , scroll animations
//This is necessary since window height calculation doesn't take into account absolute elements
$('.accordion').on('toggled', function (event, accordionPanel) {
    var allAccordions = $('.accordion-navigation');
    var activeAccordion = $(accordionPanel).parent();
    var accordionGrid = $(accordionPanel).siblings('a');

    deleteTriangle(allAccordions.children());

    if (allAccordions.hasClass('active')) {
        // Reset all accordion height in case user toggled another accordion when one was active

        // Sets current height and adds panel indicator
        addTriangle(accordionGrid);
        activeAccordion.height(accordionGrid.height() + accordionPanel.height() + triangleHeight);

        // Resets height for non active grids when switching
        $('.accordion-navigation').not('.active').height(accordionGrid.height());

        $('html, body').animate({
            scrollTop: $(accordionPanel).offset().top - 100
        }, 600);
    } else {
        // Resets height when closing accordions
        activeAccordion.height(activeAccordion.height() - accordionPanel.height() - triangleHeight);
    }
});

// Maintains accordion panel height on resize
$(window).on('resize', function () {
    var activeAccordion = $('.accordion-navigation.active');
    var accordionPanel = activeAccordion.children('.content');
    var accordionGrid = activeAccordion.children('a');

    console.log($('.accordion-navigation').scrollTop());
    if(activeAccordion){
        activeAccordion.height(accordionPanel.height() + accordionGrid.height() + triangleHeight);
    }
});

// Grid panel close button
$(".grid-close").click(function(){
    var accordion = $(this).parents('.content.active');
    $(accordion).siblings().click();
});

