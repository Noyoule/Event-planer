import { data } from 'autoprefixer';
import './bootstrap';

import Alpine from 'alpinejs'

window.Alpine = Alpine


Alpine.data('nav_data', () => ({
    open: false,
    menuOpen: false,

    darkMode() {
        document.documentElement.classList.add('dark')
    },

    lightMode() {
        document.documentElement.classList.remove('dark')
    }
}))

Alpine.directive('changetype', (el, { modifiers, expression }, { evaluate }) => {
    const expressions = expression.split(',').map(expr => expr.trim());
    el.addEventListener('click', () => {
      if(evaluate(expressions[1])){
        switch (modifiers[0]) {
            case "reponse_courte":
                console.log(modifiers)
                var array = {
                    "type": "reponse_courte",
                    "label": "",
                    "default_label": "Question" + modifiers[1],
                    "image": "",
                    "required": false
                }
                break;
            case "reponse_long":
                var array = {
                    "type": "reponse_long",
                    "label": "",
                    "image": "",
                    "required": false
                }
                break;
            case "checkbox":
                var array = {
                    "type": "checkbox",
                    "label": "",
                    "options": [],
                    "required": false
                }
                break;
            case "radio":
                var array = {
                    "type": "radio",
                    "label": "",
                    "options": [],
                    "required": false
                }
                break;
            case 'select':
                var array = {
                    "type": "select",
                    "label": "",
                    "options": [],
                    "required": false
                }
                break;
            case 'date':
                var array = {
                    "type": "date",
                    "label": "",
                    "required": false
                }
                break;
            case 'heure':
                var array = {
                    "type": "heure",
                    "label": "",
                    "required": false
                }
                break;
            case 'echelle':
                var array = {
                    "type": "echelle",
                    "label": "",
                    "min_value": "",
                    "max_value": "",
                    "required": false
                }
            default:
                break;
        }
        evaluate(expression).elements[modifiers[1]] = array
        console.log(JSON.stringify(evaluate(expressions[0])))
      }
    });
})

Alpine.directive('putvalue', (el, { expression }, { evaluate }) => {
    el.addEventListener('click', do_action);
    function do_action() {
        const expressions = expression.split(',').map(expr => expr.trim());
        let config = evaluate(expressions[0]);
        const segments = evaluate(expressions[1]).split('.');;
        // console.log(config)
        console.log(segments)
        let copieCurrent_config
        let segment

        for (segment of segments) {
            if (segment === "") {
                continue;
            }
            config = config[segment];
            copieCurrent_config = config;
        }

        if (data === "") {
            el.placeholder = config["default" + segment]
        } else {
            console.log(config)
            el.value = config
        }
    }
})

Alpine.start()

if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dar')

} else {
    document.documentElement.classList.remove('dar')
}
