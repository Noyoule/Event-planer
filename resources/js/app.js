import './bootstrap';

import Alpine from 'alpinejs'
 
window.Alpine = Alpine
 
Alpine.data('nav_data', () => ({
    open: false,
    menuOpen: false,

    darkMode() {
        document.documentElement.classList.add('dark')
    },
    
    lightMode(){
        document.documentElement.classList.remove('dark')
    }
}))

Alpine.start()

if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dar')

  } else {
    document.documentElement.classList.remove('dar')
}
