const changeTheme = (type, theme) => {
    if (!Object.keys(customThemes).includes(type)) {
        throw new Error(`Invalid Theme Type: ${type}`);
    }

    if (!customThemes[type].includes(theme)) {
        throw new Error(`Invalid Theme: ${theme}`);
    }

    localStorage.setItem(`applied${type}Theme`, theme);
    return theme;
};

const applyTheme = (type, theme) => {
    if (type === 'Secondary') {
        document.querySelector(`li[data-theme-type="secondary-theme"][data-theme="${customThemes.appliedSecondaryTheme()}"]`).classList.remove('active');
    }

    body.classList.replace(customThemes[`applied${type}Theme`](), changeTheme(type, theme));

    if (type === 'Secondary') {
        document.querySelector(`li[data-theme-type="secondary-theme"][data-theme="${customThemes.appliedSecondaryTheme()}"]`).classList.add('active');
    }
};

const customThemes = {
    Main: ['theme-dark', 'theme-light'],
    Secondary: ['theme-purple', 'theme-blue', 'theme-green', 'theme-orange', 'theme-blush', 'theme-cyan'],
    appliedMainTheme() { return localStorage.getItem('appliedMainTheme') || changeTheme('Main', this.Main[0]); },
    appliedSecondaryTheme() { return localStorage.getItem('appliedSecondaryTheme') || changeTheme('Secondary', this.Secondary[0]); },
};

const body = document.querySelector('body');
const selectedMainThemeSwitch = document.querySelector(`input[type="radio"][name="main_theme"][value="${customThemes.appliedMainTheme()}"]`);
const selectedSecondaryThemeSwitch = document.querySelector(`li[data-theme-type="secondary-theme"][data-theme="${customThemes.appliedSecondaryTheme()}"]`);

body.classList.add(customThemes.appliedMainTheme(), customThemes.appliedSecondaryTheme());

if (selectedMainThemeSwitch) {
    selectedMainThemeSwitch.checked = true;
    selectedSecondaryThemeSwitch.classList.add('active');
}
