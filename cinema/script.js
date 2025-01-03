





$('.trailer-item-info').click(function () {
    var video = $('<iframe />', {
        'class': "trailer-item-video",
        'src': "https://www.youtube.com/embed/" + this.dataset.video + "?controls=0",
        'height': "100%",
        'width': "100%",
        'frameborder': "0"
    });
    $(this).siblings('img').replaceWith(video);
    $(this).hide();
});








$('.trailer-item-info').children('i').hover(function () {
    $(this).removeClass("far");
    $(this).toggleClass('fas');

}, function () {
    $(this).removeClass("fas");
    $(this).addClass('far');
});
document.addEventListener('DOMContentLoaded', function() {
    const introSection = document.getElementById('intro');
    const historySection = document.getElementById('history');
    const missionSection = document.getElementById('mission');
    const teamMembers = document.querySelectorAll('.team-member');

    function addZoomClass(event) {
        event.target.classList.add('zoom');
    }

   

    [introSection, historySection, missionSection].forEach(section => {
    missionSection.addEventListener('mouseover', addZoomClass);
    missionSection.addEventListener('mouseout', removeZoomClass);
    })
    ;
    teamMembers.forEach(member => {
        member.addEventListener('mouseover', addZoomClass);
        member.addEventListener('mouseout', removeZoomClass);
    });
});