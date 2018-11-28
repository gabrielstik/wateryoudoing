import { TweenMax, TimelineMax } from '../vendor/TweenMax'

export default class ResultsController {

  constructor() {
    this.isRequesting = true
    const url = `/wp-content/themes/watertheme/api/get-data.php`
    const http = new XMLHttpRequest()
    http.onreadystatechange = () => {
      if (http.readyState == 4 && http.status == 200) {
        const data = JSON.parse(http.responseText)

        const terms = [
          data.termsHygiene,
          data.termsTransport,
          data.termsTechnology,
          data.termsDrinkEat,
          data.termsActivities,
        ]

        let max = 0
        for (let i = 0; i < terms.length; i++) max = max > terms[i] ? max : terms[i] 
        
        const animateBars = () => {
          const $fills = document.querySelectorAll('.results__graph_bar__fill')
          for (let i = 0; i < $fills.length; i++) {
            TweenMax.to($fills[i], .8, {
              scaleY: terms[i] / max,
              ease: Power1.easeOut
            })
          }
        }
        animateBars()
      }
    }
    http.open('GET', url, true)
    http.send()
  }
}