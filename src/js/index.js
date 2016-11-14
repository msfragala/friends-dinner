/******************************
  Emoji Panel
******************************/

const foodEmoji = document.querySelector('.emoji-panel__item--food')
const drinkEmoji = document.querySelector('.emoji-panel__item--drink')
const peopleEmoji = document.querySelector('.emoji-panel__item--people')

const foodIds = collectSymbolIds(foodEmoji)
const drinkIds = collectSymbolIds(drinkEmoji)
const peopleIds = collectSymbolIds(peopleEmoji)

setInterval(() => {
  updateEmoji(foodEmoji, foodIds)
  updateEmoji(drinkEmoji, drinkIds)
  updateEmoji(peopleEmoji, peopleIds)
}, 2000)

function updateEmoji(sheet, ids) {
  sheet.children[0].setAttribute('xlink:href', chooseRandom(ids))
}

function chooseRandom(input) {
  return input[Math.floor(input.length * Math.random())]
}

function collectSymbolIds(sheet) {
  const symbols = sheet.querySelectorAll('symbol[id]')
  return Array.apply(null, symbols).map(symbol => `#${symbol.id}`)
}
