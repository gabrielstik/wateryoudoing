import { TweenMax, TimelineMax } from '../vendor/TweenMax'

export default class SoundController {

  constructor() {
    this.$ = {
      quizz: document.querySelector('.quizz')
    }

    this._soundCreate()
  }


  _soundCreate() {
      const $audio = new Audio('../.../sounds/BO_WYD.mp3');
      $audio.play();
    }
}