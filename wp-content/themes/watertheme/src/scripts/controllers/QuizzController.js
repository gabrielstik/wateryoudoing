import TweenMax from '../vendor/TweenMax'

export default class QuizzController {

  constructor() {
    this.$ = {
      quizz: document.querySelector('.quizz')
    }
    this._eventListeners()
  }

  _eventListeners() {
    const $answers = this._getAnswers()
    for (let i = 0; i < $answers.length; i++) {
      $answers[i].addEventListener('mouseenter', () => {
        this._handleEnterAnswer(i)
      })
      $answers[i].addEventListener('mouseleave', () => {
        this._handleLeaveAnswer(i)
      })
    }
  }

  _handleEnterAnswer(answerNth) {
    TweenMax.to(this._getIllustrations()[answerNth], .5, {
      scale: 1,
      opacity: 1,
      ease: Power1.easeOut
    })
  }

  _handleLeaveAnswer(answerNth) {
    TweenMax.to(this._getIllustrations()[answerNth], .5, {
      scale: 0,
      opacity: 0,
      ease: Power1.easeOut
    })
  }

  _getAnswers() {
    const $answers = this.$.quizz.querySelectorAll('.ref-answer')
    return $answers
  }

  _getIllustrations() {
    const $illustrations = this.$.quizz.querySelectorAll('.ref-illustration')
    return $illustrations
  }
}