$('.student-home').owlCarousel({
    responsiveClass:true,
    dots: false,
    margin: 15,
    responsive:{
        0:{
            items:1.3
        },
        600:{
            items:1.6
        },
        1000:{
            items:1.6
        }
    }
})

$('.student-tests').owlCarousel({
    loop:true,
    margin:40,
    autoplay:true,
    autoplayTimeout:10000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})


$('.add').click(function () {
    toggleAdd(this)
})


function toggleAdd(className){
        var text = 'Qo\'shildi <i class="fas fa-check"></i>'
        $(className).toggleClass('added')
        if (!$(className).hasClass("added")){
            $(className).html("Qo'shish +")
        }else {
            $(className).html(text)
        }
}

AOS.init();



// var wh = window.innerHeight;
// var $split = $('.is-splited');

// init
/*
See https://www.greensock.com/splittext/ for details.
This demo uses SplitText which is a membership benefit of Club GreenSock, https://www.greensock.com/club/
*/
// gsap.registerPlugin(SplitText);
// function animateText(id, duration){
//
//     var tl = gsap.timeline(),
//         mySplitText = new SplitText("."+id.toString(), { type: "words,chars" }),
//         chars = mySplitText.chars; //an array of all the divs that wrap each character
//
//     gsap.set("#quote", { perspective: 400 });
//
//     console.log(chars);
//
//     tl.from(chars, {
//         duration: duration,
//         opacity: 0,
//         scale: 0,
//         y: 80,
//         rotationX: 180,
//         transformOrigin: "0% 50% -50",
//         ease: "back",
//         stagger: 0.01
//     });
//
// }
//
// animateText('quote-anim', 0.00001)
// animateText('description-anim',0.2)
// animateText('header-anim',0.2)
