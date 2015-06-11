//var item = {items:[]};
//for (var i = 0; i < gridData.length; i++){
//    item.items.push(
//        {
//            title: gridData[i][0],
//            description:  gridData[i][1],
//            thumbnail: [gridData[i][2]],
//            large: [gridData[i][2]],
//            tags: ['none'],
//            'button_list':
//                []
//        }
//    );
//}
//$(function(){
//    $("#page-grid").elastic_grid(item);
//});
//
//
////items:[{
////    'title'         : 'Title #1',
////    'description'   : ' Description text here',
////    'thumbnail'     : ['images/small/1.jpg', 'images/small/2.jpg']
////}]

var deleteTriangle = function(tri){
    $(tri).remove(".grid-triangle");
};

var addTriangle = function(tri){
    var triangle = "<div class='grid-triangle'></div>";
    $(tri).after(triangle);
};

var active = '';
var activeHeight = '';
var arrowHeight = 15;

$('.accordion').on('toggled', function (event, accordion) {
    var parent = $(accordion).parent();
    var parentHeight = $(parent).height();
    var eleHeight = $(accordion).height() + arrowHeight;

    var setCurrent = function(){
        $(parent).height(parentHeight + eleHeight);
        addTriangle(parent.children("a"));
        active = $(accordion);
        activeHeight = active.height() + arrowHeight;
        //scroll to element
        $('html, body').animate({
            scrollTop: $(accordion).offset().top - 100
        }, 600);
    };

    if($(accordion).hasClass('active')){
        if(!active) {
            setCurrent();
        }else{
            var activeParent = active.parent();
            //resets previous accordion height;
            $(activeParent).height(activeParent.height() - activeHeight);
            deleteTriangle(activeParent.children());

            setCurrent();
        }
    }
    else{
        $(parent).height(parentHeight-activeHeight);
        deleteTriangle(parent.children());
        active = '';
    }
});
