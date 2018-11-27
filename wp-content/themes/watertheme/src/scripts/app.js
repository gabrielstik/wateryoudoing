import QuizzController from './controllers/QuizzController'
import SoundController from './controllers/SoundController'

window.onload = () => {
  if (document.querySelector('.quizz')) {
    new QuizzController()
    // new SoundController()
  }
}