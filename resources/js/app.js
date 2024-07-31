// Navigation toggle
window.addEventListener('load', function () {
      let main_navigation = document.querySelector('#primary-menu');
      document.querySelector('#primary-menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            main_navigation.classList.toggle('hidden');
      });

      var hamburger = document.getElementById('primary-menu-toggle');
    
      hamburger.addEventListener('click', function() {
        hamburger.classList.toggle('active');
      });
});
document.addEventListener('DOMContentLoaded', function() {

  });

document.addEventListener('DOMContentLoaded', function() {
    // Select all anchor links that start with #
    const anchorLinks = document.querySelectorAll('a[href^="#"]');

    anchorLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                // Use smooth scroll behavior
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Sticky Header
    const header = document.querySelector('.sticky-header');
    const headerHeight = header.offsetHeight;
    let lastScrollTop = 0;

    function handleScroll() {
        let scrollTop = window.scrollY || document.documentElement.scrollTop;
        
        if (scrollTop > headerHeight) {
            // Past the header height, make it sticky
            header.classList.add('sticky');
        } else {
            // At the top of the page
            header.classList.remove('sticky');
        }

        lastScrollTop = scrollTop;
    }

    window.addEventListener('scroll', handleScroll);

});

jQuery(document).ready(function($) {
    $('.language-switcher').on('click', function(event) {
      event.preventDefault();
      $('.sub-menu').toggle();
    });
  
    $(document).on('click', function(event) {
      if (!$(event.target).closest('.language-switcher').length) {
        $('.sub-menu').hide();
      }
    });
  });

jQuery(document).ready(function($) {
    // Check to see if the window is top if not then display button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) { // Adjust when the button should appear
            $('#scroll-to-top').fadeIn();
        } else {
            $('#scroll-to-top').fadeOut();
        }
    });

    // Click event to scroll to top
    $('#scroll-to-top').click(function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop : 0}, 800); // Adjust scroll speed
        return false;
    });


});

document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger);
  
    const slides = gsap.utils.toArray('.custom-slide');
    console.log('Number of slides found:', slides.length);
  
    if (slides.length < 2) {
      console.error('At least two slides are required for this animation');
      return;
    }
  
    const slide1 = slides[0];
    const slide2 = slides[1];
  
    // Set initial states
    gsap.set(slide2, { autoAlpha: 0 });
  
    // Create the main timeline
    const mainTL = gsap.timeline({
      scrollTrigger: {
        trigger: "#tech",
        start: "top top",
        end: "+=100%",
        scrub: 1,
        pin: true,
        anticipatePin: 1,
      }
    });
  
    // Animate the first slide
    mainTL.to(slide1.querySelector('.custom-slide-text'), {
      yPercent: -10,
      ease: 'power1.inOut',
      duration: 0.4
    });
  
    // Crossfade between slides
    mainTL.to(slide1, {
      autoAlpha: 0,
      duration: 0.3,
      ease: 'power2.inOut'
    }, ">-0.1");
  
    mainTL.to(slide2, {
      autoAlpha: 1,
      duration: 0.3,
      ease: 'power2.inOut'
    }, "<");
    // Animate the second slide
    mainTL.to(slide2.querySelector('.custom-slide-text'), {
        yPercent: -10,
        ease: 'power1.inOut',
        duration: 0.4
      });
    // Update progress bar
    ScrollTrigger.create({
      animation: mainTL,
      trigger: "#tech",
      start: "top top",
      end: "+=100%",
      scrub: 1,
      onUpdate: (self) => {
        const progressThumb = document.querySelector('.progress-thumb');
        if (progressThumb) {
          gsap.to(progressThumb, {scaleY: self.progress, duration: 0.1});
        }
      },
    });
  
    // Optional: Add logging to track animation progress
    mainTL.eventCallback("onUpdate", function() {
      console.log("Animation progress:", mainTL.progress());
    });
  });