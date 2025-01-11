import React from 'react'
import ReactDOM from 'react-dom'
import "./frontend.scss"

const divsToUpdate = document.querySelectorAll(".paying-attention-update-me")

console.log(divsToUpdate, 'aaa')

divsToUpdate.forEach(function(div) {
  ReactDOM.render(<Quiz />, div)
  div.classList.remove("paying-attention-update-me")
})

function Quiz() {
  return (
    <div className="paying-attention-frontend">
      Hello from React new 
    </div>
  )
}