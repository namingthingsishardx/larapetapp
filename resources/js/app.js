require('./bootstrap');

require('alpinejs');


const popSound = new Audio('http://virtualpet.test/audio/pop.wav');
const errorSound = new Audio('http://virtualpet.test/audio/error.wav');
const buyNewPetSound = new Audio('http://virtualpet.test/audio/05.mp3');
const feedPetSound = new Audio('http://virtualpet.test/audio/02.mp3');
const pettingPetSound = new Audio('http://virtualpet.test/audio/01.mp3');
const playPetSound = new Audio('http://virtualpet.test/audio/04.mp3');
const groomPetSound = new Audio('http://virtualpet.test/audio/06.mp3');

document.querySelectorAll('button').forEach((item) => {
  item.addEventListener('click', function() {
    popSound.play();
  });
});

document.querySelectorAll('a').forEach((item) => {
  item.addEventListener('click', function() {
    popSound.play();
  });
});
