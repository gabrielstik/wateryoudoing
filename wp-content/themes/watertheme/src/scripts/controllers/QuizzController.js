import { TweenMax, TimelineMax } from '../vendor/TweenMax'

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

      $answers[i].addEventListener('click', () => {
        this._handleClickAnswer(i)
      })
    }
  }

  _handleEnterAnswer(answerNth) {
    TweenMax.to(this._getIllustrations()[answerNth], .2, {
      scale: 1,
      opacity: 1,
      ease: Power1.easeOut
    })
  }

  _handleLeaveAnswer(answerNth) {
    TweenMax.to(this._getIllustrations()[answerNth], .2, {
      scale: 0,
      opacity: 0,
      ease: Power1.easeOut
    })
  }

  _handleClickAnswer(answerNth) {
    const $title = this.$.quizz.querySelector('.quizz__questions__title')
    const $desc = this.$.quizz.querySelector('.quizz__questions__desc')
    const $energy = document.querySelector('.ref-energy')
    const $hunger = document.querySelector('.ref-hunger')
    const $bladder = document.querySelector('.ref-bladder')
    const $answers = this._getAnswers()

    const outTimeline = new TimelineMax()
    outTimeline
      .to($title, .2, { y: '100%', ease: Power1.easeOut })
      .to($desc, .2, { opacity: 0, ease: Power1.easeOut })
      .staggerTo($answers, .5, { x: '100%', opacity: 0, ease: Power1.easeOut }, .2)

    const deltaEnergy = this._getAnswers()[answerNth].getAttribute('delta-energy')
    const deltaHunger = this._getAnswers()[answerNth].getAttribute('delta-hunger')
    const deltaBladder = this._getAnswers()[answerNth].getAttribute('delta-bladder')
      
    const next = this._getAnswers()[answerNth].getAttribute('next')
    const energy = $energy.getAttribute('energy') - deltaEnergy
    const hunger = $hunger.getAttribute('hunger') - deltaHunger
    const bladder = $bladder.getAttribute('bladder') - deltaBladder

    $energy.setAttribute('energy', energy)
    $hunger.setAttribute('hunger', hunger)
    $bladder.setAttribute('bladder', bladder)
    this._postData(next, energy, hunger, bladder)
  }

  _getAnswers() {
    const $answers = this.$.quizz.querySelectorAll('.ref-answer')
    return $answers
  }

  _getIllustrations() {
    const $illustrations = this.$.quizz.querySelectorAll('.ref-illustration')
    return $illustrations
  }

  _postData(next, energy, hunger, bladder) {
    this.isRequesting = true
    const url = `/wp-content/themes/watertheme/api/post-data.php?next=${next}&energy=${energy}&hunger=${hunger}&bladder${bladder}`
    const http = new XMLHttpRequest()
    http.onreadystatechange = () => {
      if (http.readyState == 4 && http.status == 200) {
        this._domAjaxRequest()
      }
    }
    http.open('POST', url, true)
    http.send()
  }

  // faut régler le problème du next dans le dom (avec un xmlhttprequest get de la session)

  _domAjaxRequest() {
    this.isRequesting = true
    const url = `/quizz`
    const http = new XMLHttpRequest()
    http.onreadystatechange = () => {
      if (http.readyState == 4 && http.status == 200) {
        const $ = document.createElement('div')
        $.innerHTML = http.responseText

        const textToPush = [
          '.quizz__time',
          '.quizz__questions__title',
          '.quizz__questions__desc',
          ['.quizz__questions__list__item'],
          ['.quizz__illus__images']
        ]
        const attrToPush = [
          'next'
        ]
        this._pushText($, textToPush)
        this._pushAttributes($, attrToPush)
      }
    }
    http.open('GET', url, true)
    http.send()
  }

  _pushText($, selectors) {
    for (let i = 0; i < selectors.length; i++) {
      if (selectors[i].constructor === Array) {
        const $currentArray = document.querySelectorAll(selectors[i])
        const $requestArray = $.querySelectorAll(selectors[i])
        for (let j = 0; j < $currentArray.length; j++) {
          $currentArray[j].innerHTML = $requestArray[j].innerHTML
        }
      }
      else {
        document.querySelector(selectors[i]).innerHTML = $.querySelector(selectors[i]).innerHTML
      }
    }

    const $title = this.$.quizz.querySelector('.quizz__questions__title')
    const $desc = this.$.quizz.querySelector('.quizz__questions__desc')
    const $answers = this._getAnswers()

    const inTimeline = new TimelineMax()
    inTimeline
      .fromTo($title, .2,
        { y: '-100%' },
        { y: '0%', ease: Power1.easeOut}
      )
      .to($desc, .2, { opacity: 1, ease: Power1.easeOut })
      .staggerFromTo($answers, .5,
        { x: '-100%', opacity: 0 },
        { x: '0%', opacity: 1, ease: Power1.easeOut }
      , .2)
  }

  _pushAttributes($, attributes) {
    const $currentAnswers = this._getAnswers()
    const $requestAnswers = $.querySelectorAll('.ref-answer')

    for (let i = 0; i < attributes.length; i++) {
      for (let j = 0; j < $currentAnswers.length; j++) {
        $currentAnswers[j].setAttribute(attributes[i], $requestAnswers[j].getAttribute(attributes[i]))
      }
    }
  }
}