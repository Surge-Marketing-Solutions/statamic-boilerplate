import './animations';
import LazyLoad from "vanilla-lazyload";


// Form Submit && Captcha

const forms = document.querySelectorAll('form');

const loadCaptcha = (e) => {
    forms.forEach(form => {
        setTimeout(() => {form.classList.add('captcha-loaded')}, 500)
        form.removeEventListener('input', loadCaptcha);
    })

    const head = document.getElementsByTagName('head')[0];
    const script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'https://www.google.com/recaptcha/api.js';
    head.appendChild(script);
}

if (forms || forms.length) {
    forms.forEach(form => {
        let submitted = false;
        form.addEventListener('submit', (e) => {
            submitted ? e.preventDefault() : '';
        });
        form.addEventListener('input', loadCaptcha);

        const fileUploads = form.querySelectorAll('.file-upload');
        fileUploads.forEach(label => {
            const input = label.querySelector('input');
            const handle = label.getAttribute('data-for');
            const name  = form.querySelector(`#${handle}-name`);

            input.addEventListener('change', () => {
                const files = input.files;
                let names = []
                
                for (let i = 0; i < files.length; ++i) {
                    names.push(files[i].name);
                }

                name.innerHTML = names.toString().replace(',', ', ');
            })
        })
    })
}


// Header 

const header = document.querySelector('header');
const burger = header.querySelector('.burger');
const menu = header.querySelector('.menu');

if (burger && menu) {
    burger.addEventListener('click', () => {
        document.body.classList.toggle('no-scroll');
        burger.classList.toggle('open');
        menu.classList.toggle('active');
    })
}


// Accordion 

const accordions = document.querySelectorAll(".accordion");

if (accordions || accordions.length) {
    accordions.forEach(accordion => {
        const container = accordion.parentElement.parentElement;
        const accordionGroup = container.querySelectorAll('.accordion') ? container.querySelectorAll('.accordion') : 0;
        
        accordion.addEventListener("click", function() {
            const wrapper = accordion.parentElement;
            if (container.classList.contains('accordion-container') && !wrapper.classList.contains('open')) {
                accordionGroup.forEach(accordion => {
                    accordion.parentElement.classList.remove("open");
                })
            }
            wrapper.classList.toggle("open");
        });
    })
}


window.addEventListener('DOMContentLoaded', function () {
    new LazyLoad();
});
