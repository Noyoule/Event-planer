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
    const label_range = parseInt(modifiers[1]) + 1
    el.addEventListener('click', () => {
      if(evaluate(expressions[1])){
        switch (modifiers[0]) {
            case "reponse_courte":
                var array = {
                    "type": "reponse_courte",
                    "label": "",
                    "default_label": "Question " + label_range,
                    "image": "",
                    "required": false
                }
                break;
            case "reponse_long":
                var array = {
                    "type": "reponse_long",
                    "label": "",
                    "default_label": "Question " + label_range,
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
    function do_action() {
        let config = evaluate(expression);
        let Current_path = el.parentNode.getAttribute('config_path') + '.' + el.getAttribute('config_path')
        const segments = Current_path.split('.')
        // console.log(config)
        console.log(segments)
        let copieCurrent_config
        let segment

        for (segment of segments) {
            if (segment === "") {
                continue;
            }
            copieCurrent_config = config;
            config = config[segment];
        }

        if (config === "") {
            console.log("default_" + segment)
            el.placeholder = copieCurrent_config["default_" + segment]
        } else {
            el.value = config
        }
    }
    el.addEventListener('click', do_action)
    do_action()
})

Alpine.start()

if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dar')

} else {
    document.documentElement.classList.remove('dar')
}
