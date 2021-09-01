function getRandomIntInclusive(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min +1)) + min;
}

function getIntroLoadingTheme(value) {
  const themes = ['light', 'dark', 'ocean', 'forest', 'fluoGreen', 'fluoMagenta', 'fluoYellow'];
  console.warn(themes[value]);
  return themes[value];
}