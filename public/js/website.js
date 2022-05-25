$(document).ready(function() {

    const testimonials = [
        {
            
            image : "/imgs/testimonials/t0.jpg",
            review: "Generating random paragraphs can be an excellent way for writers to get their creative flow going at the beginning of the day. The writer has no idea what topic the random paragraph will be about when it appears.",
            from: "Karam Bsat",
            position: "Founder of Fuliver"
        },
        {
            image : "/imgs/testimonials/t1.jpg",
            review: "It's not only writers who can benefit from this free online tool. If you're a programmer who's working on a project where blocks of text are needed, this tool can be a great way to get that.",
            from: "Abdel Rahman",
            position: "Co-Founder of Fuliver"
        }
    ]
    
    gsap.registerPlugin(ScrollTrigger)

    var menuOpen = false

    $(window).scroll(function () {

        var scrollProgress = (window.scrollY * 100) / ($(document).height() - $(window).height())

        $(".scroll_progress").css("width", scrollProgress + "%")

        var scrollProgressMobile = 169 - ((window.scrollY * 169) / ($(document).height() - $(window).height()))

        $("circle").css("stroke-dashoffset", scrollProgressMobile)

    })

    $(window).resize(function() {
        if($(".traction").length == 1) {
            move = $(".traction").outerWidth() + parseInt($(".tractions").css("gap").match(/\d+/)[0])
        }
    })

    $(".burger_menu").on("click", function() {

        menuOpen = !menuOpen

        if(menuOpen) {
            
            gsap.to(
                ".bar:first-child",
                {
                    y: 10,
                    duration: 0.1
                }
            )

            gsap.to(
                ".bar:first-child",
                {
                    rotation: 45,
                    duration: 0.1,
                    delay: 0.2
                }
            )

            gsap.to(
                ".bar:nth-child(2)",
                {
                    opacity: 0,
                    duration: 0.1
                }
            )

            gsap.to(
                ".bar:last-child",
                {
                    y: -7,
                    duration: 0.1
                }
            )

            gsap.to(
                ".bar:last-child",
                {
                    rotation: -45,
                    duration: 0.1,
                    delay: 0.2
                }
            )

            gsap.to(
                ".overlay_menu",
                {
                    top: 80,
                    duration: 0.1
                }
            )

        } else {
            
            gsap.to(
                ".bar:first-child",
                {
                    y: 0,
                    duration: 0.1,
                    delay: 0.2
                }
            )

            gsap.to(
                ".bar:first-child",
                {
                    rotation: 0,
                    duration: 0.1
                }
            )

            gsap.to(
                ".bar:nth-child(2)",
                {
                    opacity: 1,
                    duration: 0.1,
                    delay: 0.2
                }
            )

            gsap.to(
                ".bar:last-child",
                {
                    y: 0,
                    duration: 0.1,
                    delay: 0.2
                }
            )

            gsap.to(
                ".bar:last-child",
                {
                    rotation: 0,
                    duration: 0.1,
                }
            )

            gsap.to(
                ".overlay_menu",
                {
                    top: -280,
                    duration: 0.2
                }
            )

        }
        
    })

    $(".contact_us").on("click", function() {
        window.location.href = "/contact-us"
    })

    /* TRACTION SLIDER START */

    var tractionTimer = 0
    if($(".traction").length > 1) {
        var move = $(".traction").outerWidth() + parseInt($(".tractions").css("gap").match(/\d+/)[0])
    }
    var traction

    function animateTraction() {
        if($(".tractions").length == 1) {
            tractionTimer = setInterval(function() {       
                gsap.to(".traction", {x: -(move)})
                setTimeout(function() {
                    $(".traction:first-child()").insertAfter(".traction:last-child()")
                    gsap.set(".traction", {x:"0"})
                }, 1000)
            }, 1000)
        }
    }

    animateTraction()

    $(".traction").mouseover(function() {
        clearInterval(tractionTimer);
        traction = $(this).children(".traction_date")[0]
        $(document).on('mousemove', function(e) {
            var x = (e.clientX * 5) / 350
            var y = (e.clientY * 5) / 350
            $(traction).css("transform", "translate("+x+"px,"+y+"px)")
        })
    }).mouseout(function() {
        animateTraction()
        $(document).unbind()
    })
    
    /* TRACTION SLIDER END */

    /* TESTOMONIALS START */

    currentTestimonial = 0

    if($("#testimonials").length == 1) {

        $.each(testimonials, function (index, value) {
            if(index == 0) {
                $(".circles").append("<div class='circle active'></div>")
            } else {
                $(".circles").append("<div class='circle'></div>")
            }
        });

        $(".testimonial_image img").attr("src", testimonials[0].image)

        $(".testimonial_review").html('"'+testimonials[0].review+ '"')

        $(".testimonial_reviewer h4").html(testimonials[0].from)

        $(".testimonial_reviewer p").html(testimonials[0].position)

    }

    $(".testimonial_next").on("click", function() {

        currentTestimonial += 1

        if(currentTestimonial == testimonials.length) {
            currentTestimonial = 0
        }

        $(".testimonial_image img").attr("src", testimonials[currentTestimonial].image)

        $(".testimonial_review").html('"'+testimonials[currentTestimonial].review+ '"')

        $(".testimonial_reviewer h4").html(testimonials[currentTestimonial].from)

        $(".testimonial_reviewer p").html(testimonials[currentTestimonial].position)

        $(".circle").removeClass("active")

        $(".circle:nth-child("+(currentTestimonial + 1)+")").addClass("active")

    })

    /* TESTIMONIALS END */

    /* FLASH MESSAGE START */

    

    $("#close_message").on('click', function() {
        $("#flash_message").remove()
    })

    /* FLASH MESSAGE END */

})