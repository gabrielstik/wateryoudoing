import QuizzController from './controllers/QuizzController'

window.onload = () => {
  if (document.querySelector('.quizz')) new QuizzController()
}