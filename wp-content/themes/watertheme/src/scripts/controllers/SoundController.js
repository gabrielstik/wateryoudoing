export default class SoundController {

  constructor() {
    this.$ = {
      quizz: document.querySelector('.quizz')
    }

    this.click = new Audio(this.$.quizz.dataset.uri+'/sounds/click.wav');

    const $answers = document.querySelectorAll('.ref-answer')
    
    for (let i = 0; i < $answers.length; i++) {
      $answers[i].addEventListener('click', () => {
        console.log('ok')
        this.click = new Audio(this.$.quizz.dataset.uri+'/sounds/click.wav');
        this.click.currentTime = 0
        this.click.play()
      })
    }
  }
}