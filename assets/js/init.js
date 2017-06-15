$(function(){
    $('.circle').circleProgress().on('circle-animation-progress', function(event, progress, stepValue) {
        $(this).find('strong').text(stepValue.toFixed(2).substr(2) + '%');
    });
});
