import Core from './core/core.js';
import ThemeConfigurator from './theme-configurator/theme-configurator.js'

export default class Enlink extends Core {

    constructor () {
        super()
        this.initThemeConfig()
    }

    initThemeConfig() {
        ThemeConfigurator.themeConfigurator()
    }
}

$(() => {
   window.Enlink = new Enlink();
});
