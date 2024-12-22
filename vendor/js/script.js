const swiper1 = new Swiper('.slide-content-2', {
    loop: false,
    grabCursor: true,
    spaceBetween: 35,

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }

});


const swiper2 = new Swiper('.slide-content-3', {
    loop: false,
    grabCursor: true,
    spaceBetween: 35,

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }

});


const swiper4 = new Swiper('.slide-content-4', {
    loop: false,
    grabCursor: true,
    spaceBetween: 35,

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }

});


const swiper5 = new Swiper('.slide-content-5', {
    loop: false,
    grabCursor: true,
    spaceBetween: 35,

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }

});



const swiper6 = new Swiper('.slide-content-6', {
    loop: false,
    grabCursor: true,
    spaceBetween: 35,

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }

});



const swiper7 = new Swiper('.slide-content-7', {
    loop: false,
    grabCursor: true,
    spaceBetween: 35,

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }

});




const swiper8 = new Swiper('.slide-content-8', {
    loop: false,
    grabCursor: true,
    spaceBetween: 35,

    // Pagination bullets
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive breakpoints
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 3
        }
    }

});

const accordionButtons = document.querySelectorAll('.accordion-button');

accordionButtons.forEach((button) => {
    button.addEventListener('click', () => {
        // Wait for the collapse animation to complete
        setTimeout(() => {
            // Find the corresponding accordion-body
            const targetId = button.getAttribute('data-bs-target');
            const accordionBody = document.querySelector(targetId);

            if (accordionBody) {
                // Calculate the position of the button and body
                const buttonRect = button.getBoundingClientRect();
                const bodyRect = accordionBody.getBoundingClientRect();

                // Calculate the scroll position
                const scrollToY =
                    window.scrollY +
                    buttonRect.top -
                    (window.innerHeight / 2) +
                    (buttonRect.height / 2) +
                    (bodyRect.height / 2);

                // Scroll the page
                window.scrollTo({
                    top: scrollToY,
                    behavior: 'smooth',
                });
            }
        }, 300); // Adjust timeout to match the collapse animation duration
    });
});




console.log("script is running");