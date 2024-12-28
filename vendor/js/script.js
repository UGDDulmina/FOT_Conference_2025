const accordionButtons = document.querySelectorAll('.accordion-button');

// Define an additional offset to ensure the accordion button is visible after scroll
const additionalOffset = 80; // Adjust this value if necessary (this is for any fixed navbar or extra space)

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
                    additionalOffset; // Adjust to ensure the button is fully visible

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