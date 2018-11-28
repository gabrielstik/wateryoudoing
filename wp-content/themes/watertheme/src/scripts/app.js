import QuizzController from './controllers/QuizzController'
import SoundController from './controllers/SoundController'
import ResultsController from './controllers/ResultsController'

window.onload = () => {
  if (document.querySelector('.quizz')) {
    new QuizzController()
    new SoundController()
  }
  if (document.querySelector('.results'))  new ResultsController()
}