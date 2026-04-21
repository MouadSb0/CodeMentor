/* -----------------------------------------------
/* Particles Configuration - CodeMentor
/* ----------------------------------------------- */

/**
 * Initialize particles for all elements with class 'container_top'
 */
function initParticles() {
    const containers = document.querySelectorAll('.container_top');
    
    containers.forEach((container, index) => {
        // Create a unique ID if not already present
        let targetId = container.id;
        if (!targetId || targetId === 'particles-js') {
            targetId = `particles-id-${index}`;
            container.id = targetId;
        }

        particlesJS(targetId, {
            "particles": {
                "number": {
                    "value": 100,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": ["#30D4ED", "#ffffff", "#0D1B2A"]
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    }
                },
                "opacity": {
                    "value": 0.6,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": true,
                        "speed": 2,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#30D4ED",
                    "opacity": 0.2,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 2,
                    "direction": "none",
                    "random": true,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": true,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 200,
                        "line_linked": {
                            "opacity": 0.5
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
    });
}

// Run initialization
if (typeof particlesJS !== 'undefined') {
    initParticles();
} else {
    window.addEventListener('load', initParticles);
}

/* -----------------------------------------------
/* Course Carousel Logic - CodeMentor
/* ----------------------------------------------- */

document.addEventListener('DOMContentLoaded', () => {
    const courses = [
        {
            title: "Python",
            hours: "54 Heures",
            modules: "12 Modules",
            exercises: "150 Exercices",
            rating: "4.8 / 5",
            img: "img/backgroung6.jpg"
        },
        {
            title: "JavaScript",
            hours: "60 Heures",
            modules: "15 Modules",
            exercises: "200 Exercices",
            rating: "4.9 / 5",
            img: "img/background2.jpg"
        },
        {
            title: "Data Science",
            hours: "80 Heures",
            modules: "20 Modules",
            exercises: "300 Exercices",
            rating: "4.7 / 5",
            img: "img/background3.jpg"
        },
        {
            title: "Algorithmes",
            hours: "40 Heures",
            modules: "10 Modules",
            exercises: "120 Exercices",
            rating: "4.6 / 5",
            img: "img/background4.jpg"
        }
    ];

    let currentIndex = 0;
    const coursDiv = document.querySelector('.obj_section .cours');
    const btnLeft = document.querySelector('.flech_left');
    const btnRight = document.querySelector('.flech_right');

    if (!coursDiv || !btnLeft || !btnRight) return;

    function updateCourse(direction) {
        // Apply fade-out animation
        const fadeClass = direction === 'next' ? 'course-fade-out' : 'course-fade-out-right';
        coursDiv.classList.add(fadeClass);

        setTimeout(() => {
            // Update Data
            const course = courses[currentIndex];
            coursDiv.querySelector('h3').textContent = course.title;
            const listItems = coursDiv.querySelectorAll('ul li');
            if (listItems.length >= 3) {
                listItems[0].textContent = course.hours;
                listItems[1].textContent = course.modules;
                listItems[2].textContent = course.exercises;
            }
            coursDiv.querySelector('p').textContent = course.rating;

            // Remove fade-out and trigger fade-in
            coursDiv.classList.remove('course-fade-out', 'course-fade-out-right');
            
            // Force reflow
            void coursDiv.offsetWidth;
            
            coursDiv.classList.add('course-fade-in');

            setTimeout(() => {
                coursDiv.classList.remove('course-fade-in');
            }, 500);
        }, 500);
    }

    // User requested: flech_left for NEXT, flech_right for PREVIOUS
    btnLeft.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % courses.length;
        updateCourse('next');
    });

    btnRight.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + courses.length) % courses.length;
        updateCourse('prev');
    });
});