

// document.addEventListener('DOMContentLoaded', () => {
//     const sliders = document.querySelector('.sliders');
//     const slideCount = document.querySelectorAll('.slide').length;
//     let currentIndex = 0;
//     let slideDirection = 1;

//     const showSlide = (index) => {
//         const offset = -index * 100;
//         sliders.style.transform = `translateX(${offset}%)`;
//     };

//     const autoSlide = () => {
//         currentIndex += slideDirection;

//         if (currentIndex >= slideCount) {
//             currentIndex = slideCount - 2; // Revenir avant-dernier pour changer de direction
//             slideDirection = -1;
//         } else if (currentIndex < 0) {
//             currentIndex = 1; // Aller au suivant pour changer de direction
//             slideDirection = 1;
//         }

//         showSlide(currentIndex);
//     };

//     setInterval(autoSlide, 3000); // Intervalle de 3 secondes
// });


// let projectSliders = [...document.querySelectorAll('.sliders')];
// let next = [...document.querySelectorAll('.next')];
// let prev = [...document.querySelectorAll('.prev')];

// projectSliders.forEach((item, i) => {
//     let containerDimensions = item.getBoundingClientRect();
//     let containerWidth = containerDimensions.width;


//     function autoSlide() {
//         item.scrollLeft += containerWidth;
//         if (item.scrollLeft >= item.scrollWidth / 4) {
//             item.scrollLeft = 0;
//         }
//     }

//     let interval = setInterval(autoSlide, 3000); // Slide every 3 seconds

//     next[i].addEventListener('click', () => {
//         item.scrollLeft += containerWidth;
//         if (item.scrollLeft >= item.scrollWidth / 4) {
//             item.scrollLeft = 0;
//         }
//         clearInterval(interval);
//         interval = setInterval(autoSlide, 3000);
//     });

//     prev[i].addEventListener('click', () => {
//         item.scrollLeft -= containerWidth;
//         if (item.scrollLeft <= 0) {
//             item.scrollLeft = item.scrollWidth / 4;
//         }
//         clearInterval(interval);
//         interval = setInterval(autoSlide, 3000);
//     });

//     item.addEventListener('mouseenter', () => {
//         clearInterval(interval); // Stop auto sliding on hover
//     });

//     item.addEventListener('mouseleave', () => {
//         interval = setInterval(autoSlide, 3000); // Resume auto sliding when hover ends
//     });
// });


// document.addEventListener('DOMContentLoaded', () => {
//     const sliders = document.querySelector('.sliders');
//     const slideCount = document.querySelectorAll('.slide').length;
//     let currentIndex = 0;
//     let slideDirection = 1;

//     const showSlide = (index) => {
//         const offset = -index * 100;
//         sliders.style.transform = `translateX(${offset}%)`;
//     };

//     const autoSlide = () => {
//         currentIndex += slideDirection;

//         if (currentIndex >= slideCount) {
//             currentIndex = slideCount - 2; // Revenir avant-dernier pour changer de direction
//             slideDirection = -1;
//         } else if (currentIndex < 0) {
//             currentIndex = 1; // Aller au suivant pour changer de direction
//             slideDirection = 1;
//         }

//         showSlide(currentIndex);
//     };

//     setInterval(autoSlide, 3000); // Intervalle de 3 secondes

//     // Ajout des boutons next et prev
//     const nextButton = document.querySelector('.next'); // Assurez-vous que .next existe dans votre HTML
//     const prevButton = document.querySelector('.prev'); // Assurez-vous que .prev existe dans votre HTML

//     // Fonction pour avancer au slide suivant
//     nextButton.addEventListener('click', () => {
//         slideDirection = 1;
//         currentIndex += 1;
//         if (currentIndex >= slideCount) {
//             currentIndex = 0; // Revenir au début
//         }
//         showSlide(currentIndex);
//     });

//     // Fonction pour reculer au slide précédent
//     prevButton.addEventListener('click', () => {
//         slideDirection = -1;
//         currentIndex -= 1;
//         if (currentIndex < 0) {
//             currentIndex = slideCount - 1; // Aller à la fin
//         }
//         showSlide(currentIndex);
//     });
// });


// document.addEventListener('DOMContentLoaded', () => {
//     const sliders = document.querySelector('.sliders');
//     const slideCount = document.querySelectorAll('.slide').length;
//     let currentIndex = 0;

//     const showSlide = (index) => {
//         const offset = -index * 100; // Calcule l'offset pour centrer le slide
//         sliders.style.transform = `translateX(${offset}%)`;
//     };

//     // Fonction pour avancer au slide suivant
//     const nextSlide = () => {
//         currentIndex = (currentIndex + 1) % slideCount; // Avance et revient au début
//         showSlide(currentIndex);
//     };

//     // Fonction pour reculer au slide précédent
//     const prevSlide = () => {
//         currentIndex = (currentIndex - 1 + slideCount) % slideCount; // Recule et revient à la fin
//         showSlide(currentIndex);
//     };

//     // Gestion des boutons
//     const nextButton = document.querySelector('.next');
//     const prevButton = document.querySelector('.prev');

//     nextButton.addEventListener('click', () => {
//         nextSlide();
//     });

//     prevButton.addEventListener('click', () => {
//         prevSlide();
//     });

//     // Défilement automatique toutes les 3 secondes
//     setInterval(() => {
//         nextSlide();
//     }, 3000);
// });

document.addEventListener('DOMContentLoaded', () => {
    const sliders = document.querySelector('.sliders'); // Conteneur des slides
    const slides = document.querySelectorAll('.slide'); // Tous les slides
    const slideCount = slides.length; // Nombre total de slides
    let currentIndex = 0; // Slide actuel
    let slideDirection = 1; // Direction du défilement : 1 (vers la droite) ou -1 (vers la gauche)

    const showSlide = (index) => {
        const offset = -index * 100; // Décalage du conteneur
        sliders.style.transform = `translateX(${offset}%)`;
    };

    const autoSlide = () => {
        currentIndex += slideDirection;

        // Changer de direction si nous atteignons les extrémités
        if (currentIndex >= slideCount) {
            currentIndex = slideCount - 2;
            slideDirection = -1; // Inverse la direction (vers la gauche)
        } else if (currentIndex < 0) {
            currentIndex = 1;
            slideDirection = 1; // Inverse la direction (vers la droite)
        }

        showSlide(currentIndex);
    };

    // Boutons "next" et "prev"
    const nextButton = document.querySelector('.next');
    const prevButton = document.querySelector('.prev');

    // Avancer indéfiniment
    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slideCount; // Avancer au prochain slide
        slideDirection = 1; // Forcer la direction vers la droite
        showSlide(currentIndex);
    });

    // Reculer indéfiniment
    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slideCount) % slideCount; // Reculer au slide précédent
        slideDirection = -1; // Forcer la direction vers la gauche
        showSlide(currentIndex);
    });

    // Défilement automatique toutes les 3 secondes
    setInterval(autoSlide, 3000); // Intervalle de 3 secondes pour l'auto-défilement
});



// details sliders
const smallImages = document.querySelectorAll('.smallImage');
const largeImage = document.getElementById('largeImage');

let index = 0;

function showImage(index) {
    largeImage.src = smallImages[index].src;
    smallImages.forEach((img,i) =>{
        if (i == index) {
            img.classList.add('active');
        } else {
            img.classList.remove('active');
        }
    });

    index = index;
}

smallImages.forEach((img,index) =>{
    img.addEventListener('click', () =>{
        showImage(index);
    })
});

function diaporama() {
    index = (index + 1) % smallImages.length;
    showImage(index);
}

setInterval(diaporama, 3000);
// showImage(index);